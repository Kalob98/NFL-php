<!-- php code used to fill input boxes when the user clicks the edit button on the updateTeamView page -->
<?php
    include_once '../database/database.php';
    $name = $_GET['name'];
    $sql = "SELECT * FROM team WHERE `name` = \"{$name}\"";

    $result = mysqli_query($conn, $sql) or die('MySQL Error: ' . mysqli_error($conn) . ' (' . mysqli_errno($conn) . ')');
?>

<!-- updateTeamInfoView class displays a page where a user can change a teams information that is stored in the database -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Team</title>
    <link rel="stylesheet" href="../includes/navigation-bar-style.css">
    <style type="text/css">
    label {
        width: 150px;
        display: inline-block;
    }
    </style>
</head>

<body>
    <center>
        <!-- Create navagation bar at top of screen -->
        <div class="topnav">
            <a href="../index.php">Home</a>
            <a href="createTeamView.php">Create</a>
            <a href="readAllTeamsView.php">Read</a>
            <a class="active" href="updateTeamView.php">Update</a>
            <a href="deleteTeamView.php">Delete</a>
        </div>

        <h2>Edit Team Information</h2>

        <form action="../model/updateTeamInfoModel.php" method="POST">

            <!-- php code used to fill in the input boxes and pass the new information to the updateTeamInfoModel -->
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
            <input type="hidden" value="<?php echo $row["id"];?>" name="id" id="id">

            <label for="name">Team Name</label>
            <input type="text" name="name" id="name" value="<?php  echo $row["name"];?>">
            <br><br>

            <label for="yearFounded">Year Founded</label>
            <input type="text" name="yearFounded" id="yearFounded" value="<?php echo $row["yearFounded"]; ?>">
            <br><br>

            <label for="stadiumName">Stadium Name</label>
            <input type="text" name="stadiumName" id="stadiumName" value="<?php echo $row["stadiumName"]; ?>">
            <br><br>

            <label for="state">State</label>
            <input type="text" name="state" id="state" value="<?php echo $row["state"]; ?>">
            <br><br>

            <label for="url">URL</label>
            <input type="text" name="url" id="url" value="<?php echo $row["url"]; ?>">
            <br><br>

            <label for="division">Division</label>
            <input type="text" name="division" id="division" value="<?php echo $row["division"]; ?>">
            <br><br>

            <?php } ?>

            <input type="submit" name="submit" value="Submit">
        </form>
    </center>
</body>

</html>l