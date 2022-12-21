<?php
    require_once 'Db.php';
    $sql = "SELECT * FROM tasks";
    $result = mysqli_query($conn, $sql);
    $tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/vite.svg" />
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TODO App</title>
</head>

<body>
  <div id="app">
    <div class="container">
      <div class="container_grid">
        <div class="todo">
          <div class="todo_container">
            <div class="title">
              <h1>Tasks</h1>
              <div class="today">
                <h3>Today</h3>
              </div>
            </div>
            <div class="tasks">
              <?php
                foreach ($tasks as $task) {
                  ?>
                  <div class="task">
                  <form class="taskbox">
                    <input type="text" class="done" readonly value="<?php echo $task['task']; ?>">
                    <div class="actions">
                      <button class="edit"><span class="icon-pencil"></span></button>
                      <button class="delete"><span class="icon-bin"></span></button>
                    </div>
                  </form>
                  </div>
                <?php
                }
                ?> 
                <!-- <form class="taskbox">
                  <input type="text" class="done" readonly value="masu bhat khane raksi nakhane ">
                  <div class="actions">
                    <button class="edit"><span class="icon-pencil"></span></button>
                    <button class="delete"><span class="icon-bin"></span></button>
                  </div>
                </form>
              </div> -->

            <div class="form">
              <form id="taskInput_form" action="addTask.php" method="POST">
                <input id="taskInput_field" name="task" type="text" placeholder="What are you thinking to do?">
                <button type="submit" name="submit" class="sunmitBtn">Add</button>
              </form>
            </div>
          </div>
        </div>




        <div class="calendar">

        </div>
      </div>
    </div>

  </div>
  <script type="module" src="/main.js"></script>
</body>

</html>