<!-- updateTeamModel that gets the parameters and updates them in the database -->
<?php
    //establish connection
    include_once '../database/database.php';

    //getting variables
    $id = $_POST['id'];
    $name = $_POST['name'];
    $yearFounded = $_POST['yearFounded'];
    $stadiumName = $_POST['stadiumName'];
    $state = $_POST['state'];
    $url = $_POST['url'];
    $division = $_POST['division'];

    //sql statement
    $sql = "UPDATE `team` SET `name` = '$name', `yearFounded` = '$yearFounded', `stadiumName` = '$stadiumName', `state` = '$state', `url` = '$url', `division` = '$division' WHERE `id` = $id";

    mysqli_query($conn, $sql) or die('MySQL Error: '.mysqli_error($conn).' ('.mysqli_errno($conn).')');

    header("Location: ../view/updateTeamView.php?update=success");