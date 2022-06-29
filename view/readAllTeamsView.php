<!-- php code used to display all the users in a table -->
<?php
    include_once '../database/database.php';
    $sql = "SELECT * FROM `team` ORDER BY `name` ASC";

    $result = mysqli_query($conn, $sql) or die('MySQL Error: ' . mysqli_error($conn) . ' (' . mysqli_errno($conn) . ')');
    $resultCheck = mysqli_num_rows($result);
?>

<!-- readAllTeamsView class that displays a page where a user can see every entry in the database -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Teams</title>
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
        <a class="active" href="readAllTeamsView.php">Read</a>
        <a href="updateTeamView.php">Update</a>
        <a href="deleteTeamView.php">Delete</a>
    </div>
    <center>
        <!-- Displays logo -->
        <img src="../Images/nfl.png" alt="NFL logo" width="150" height="150">

        <h2>Read all Teams</h2>

        <table>
            <tr>
                <!-- table column names -->
                <th>Team Name</th>
                <th>Year Founded</th>
                <th>Stadium Name</th>
                <th>State</th>
                <th>URL</th>
                <th>Division</th>
            </tr>

            <!-- php code used to fill the table in -->
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
            </tr>
            <?php 
                    }
                }
            ?>
        </table>
    </center>
</body>

</html>