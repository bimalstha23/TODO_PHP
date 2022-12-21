<?php
    $host = 'localhost';
    $password = '';
    $db = 'todo';
    $user = 'root';
    $conn = mysqli_connect($host, $user, $password, $db);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        return;
    }
?>