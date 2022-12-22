<?php
    require_once 'Db.php';
    $id = $_GET['id'];
    echo $id;
    $sql = "DELETE FROM tasks WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
    } else {
        echo 'query error: ' . mysqli_error($conn);
    }
?>