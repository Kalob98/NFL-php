<!-- php code used to insert data into the table after a user enters a team name -->
<?php
    include_once '../database/database.php';
    $name = $_POST['name'];
    $sql = "SELECT * FROM team WHERE `name` = \"{$name}\"";

    $result = mysqli_query($conn, $sql) or die('MySQL Error: ' . mysqli_error($conn) . ' (' . mysqli_errno($conn) . ')');
    $resultCheck = mysqli_num_rows($result);
?>

<!-- updateTeamView class displays a page where a user can enter a team name and that teams information is displayed -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Team</title>
    <link rel="stylesheet" href="../includes/navigation-bar-style.css">
    <style type="text/css">
    label {
        width: 80px;
        display: inline-block;
    }

    table,
    th,
    td {
        border: 1px solid black;
        text-align: center;
    }
    </style>
</head>

<body>
    <!-- Create navagation bar at top of screen -->
    <div class="topnav">
        <a href="../index.php">Home</a>
        <a href="createTeamView.php">Create</a>
        <a href="readAllTeamsView.php">Read</a>
        <a class="active" href="updateTeamView.php">Update</a>
        <a href="deleteTeamView.php">Delete</a>
    </div>

    <!-- Displays logo -->
    <center>
        <img src="../Images/nfl.png" alt="NFL logo" width="150" height="150">

        <h2>Update a Team</h2>

        <table>
            <tr>
                <!-- table column names -->
                <th>Team Name</th>
                <th>Year Founded</th>
                <th>Stadium Name</th>
                <th>State</th>
                <th>URL</th>
                <th>Division</th>
                <th></th>
            </tr>

            <!-- php code used to fill in table -->
            <?php 
                if($resultCheck > 0){
                    while($row = mysqli_fetch_assoc($result)){ 
            ?>
            <tr>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["yearFounded"]; ?></td>
                <td><?php echo $row["stadiumName"]; ?></td>
                <td><?php echo $row["state"]; ?></td>
                <td><?php echo $row["url"]; ?></td>
                <td><?php echo $row["division"]; ?></td>

                <!-- link to the updateTeamInfoView.php where a user can edit info -->
                <td><a href="updateTeamInfoView.php?name=<?php echo $row["name"]; ?>"> Edit</a></td>
            </tr>
            <?php 
                    }
                }
            ?>
        </table>

        <br>
        <!-- submit button -->
        <form method="POST">
            <label for="name">Team Name</label>
            <input type="text" id="name" name="name">
            <input type="submit" name="submit" value="View Results">
        </form>
    </center>



</body>

</html>