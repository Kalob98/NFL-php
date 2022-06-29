<!-- php code used to populate the table -->
<?php
    include_once '../database/database.php';
    $sql = "SELECT * FROM team";

    $result = mysqli_query($conn, $sql) or die('MySQL Error: ' . mysqli_error($conn) . ' (' . mysqli_errno($conn) . ')');
    $resultCheck = mysqli_num_rows($result);
?>

<!-- deleteTeamView class that displays the page where a user can see all the teams in the database and click a delete button to delete that specific team. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Team</title>
    <link rel="stylesheet" href="../includes/navigation-bar-style.css">
    <style type="text/css">
    label {
        width: 80px;
        display: inline-block;
    }

    button {
        color: red;
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
        <a href="updateTeamView.php">Update</a>
        <a class="active" href="deleteTeamView.php">Delete</a>
    </div>
    <center>
        <!-- Displays logo -->
        <img src="../Images/nfl.png" alt="NFL logo" width="150" height="150">

        <h2>Delete a Team</h2>

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

            <!-- php code used to fill in the table -->
            <?php 
                if($resultCheck > 0){
                    while($row = mysqli_fetch_assoc($result)){ 
            ?>
            <tr>
                <form action="../model/deleteTeamModel.php" method="POST">
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["yearFounded"]; ?></td>
                    <td><?php echo $row["stadiumName"]; ?></td>
                    <td><?php echo $row["state"]; ?></td>
                    <td><?php echo $row["url"]; ?></td>
                    <td><?php echo $row["division"]; ?></td>

                    <!-- creating a button in the table that when a user clicks it that team is deleted -->
                    <td><button type="submit" name="submit" value="<?php echo $row["id"]; ?>"> Delete</button></td>
                </form>
            </tr>
            <?php 
                    }
                }
            ?>
        </table>
    </center>
</body>

</html>