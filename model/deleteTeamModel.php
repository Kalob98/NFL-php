<!-- deleteTeamModel that deketes a team in the database -->
<?php
    //establish connection
    include_once '../database/database.php';

    //gets id of team to be deleted
    $id = $_POST['submit'];

    //sql statement
    $sql = "DELETE FROM `team` WHERE `id` = $id";

    mysqli_query($conn, $sql) or die('MySQL Error: '.mysqli_error($conn).' ('.mysqli_errno($conn).')');

    header("Location: ../view/deleteTeamView.php?delete=success");