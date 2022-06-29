<!-- createTeamModel that gets the parameters and inserts them into the database -->
<?php
    //establishes connection
    include_once '../database/database.php';

    //gets variables
    $name = $_POST['name'];
    $yearFounded = $_POST['yearFounded'];
    $stadiumName = $_POST['stadiumName'];
    $state = $_POST['state'];
    $url = $_POST['url'];
    $division = $_POST['division'];

    //query
    $sql = "INSERT INTO team (`name`, `yearFounded`, `stadiumName`, `state`, `url`, `division`) VALUES(\"{$name}\", \"{$yearFounded}\", \"{$stadiumName}\", \"{$state}\", \"{$url}\", \"{$division}\");";

    mysqli_query($conn, $sql) or die('MySQL Error: '.mysqli_error($conn).' ('.mysqli_errno($conn).')');

    //after the sql statement is complete this takes you back to the specified page
    header("Location: ../view/createTeamView.php?signup=success");