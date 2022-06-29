<!-- CreateTeamView class that displays the page where a user can create a new team. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Team</title>
    <link rel="stylesheet" href="../includes/navigation-bar-style.css">
    <style type="text/css">
    label {
        width: 150px;
        display: inline-block;
    }
    </style>
</head>

<body>
    <!-- Create navagation bar at top of screen -->
    <div class="topnav">
        <a href="../index.php">Home</a>
        <a class="active" href="createTeamView.php">Create</a>
        <a href="readAllTeamsView.php">Read</a>
        <a href="updateTeamView.php">Update</a>
        <a href="deleteTeamView.php">Delete</a>
    </div>

    <center>
        <!-- Displays logo -->
        <img src="../Images/nfl.png" alt="NFL logo" width="150" height="150">

        <h2>Add a Team</h2>

        <!-- parameters -->
        <form action="../model/createTeamModel.php" method="POST">

            <label for="name">Team Name</label>
            <input type="text" name="name" id="name">
            <br><br>

            <label for="yearFounded">Year Founded</label>
            <input type="text" name="yearFounded" id="yearFounded">
            <br><br>

            <label for="stadiumName">Stadium Name</label>
            <input type="text" name="stadiumName" id="stadiumName">
            <br><br>

            <label for="state">State</label>
            <input type="text" name="state" id="state">
            <br><br>

            <label for="url">URL</label>
            <input type="text" name="url" id="url">
            <br><br>

            <label for="division">Division</label>
            <input type="text" name="division" id="division">
            <br><br>

            <input type="submit" name="submit" value="Submit">
            <br><br>
        </form>
    </center>
</body>

</html>