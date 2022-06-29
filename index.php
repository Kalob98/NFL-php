<?php include_once 'database/database.php'; ?>

<!-- Home page where team names and links to team websites are displayed -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xtern</title>
    <link rel="stylesheet" href="includes/navigation-bar-style.css">
</head>

<body>
    <!-- Create navagation bar at top of screen -->
    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="view/createTeamView.php">Create</a>
        <a href="view/readAllTeamsView.php">Read</a>
        <a href="view/updateTeamView.php">Update</a>
        <a href="view/deleteTeamView.php">Delete</a>
    </div>


    <!-- Displays logo -->
    <center>
        <img src="Images/nfl.png" alt="NFL logo" width="150" height="150">

        <h2> Team Websites </h2>

        <!-- Creates division choice box -->

        <!-- php code used to create a link taking you to the teams website -->
        <?php
            $sql = "SELECT * FROM team;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            //if resultCheck is not empty
            if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<a href=\"{$row['url']}\" target=\"_blank\">{$row['name']}<br></a>";
                }
            }
        ?>
    </center>
</body>

</html>