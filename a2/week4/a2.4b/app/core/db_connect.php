<?php

function db_connect()
{
    $conn = mysqli_connect('localhost', 'root', '', 'sd1b');

    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    return $conn;
}

?>
