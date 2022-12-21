<?php
    require_once 'Db.php';
    if(isset($_POST['submit'])){
        if(!isset($_POST['task']) || empty($_POST['task'])) {
            echo "Task is required";
            exit;
        }
        $task = $_POST['task'];
        $sql = "INSERT INTO tasks (task) VALUES ('$task')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Task added successfully";
            header('Location: index.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>