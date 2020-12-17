<?php
  require_once "_temp.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="img/icons/todo.ico" type="image/x-icon">

  <link rel="stylesheet" href="css/material-icons.css">
  <link rel="stylesheet" href="css/todo.css">


  <title>Список задач</title>
</head>
<body>
  
  <div class="content">
          <div class="content-image">
            <a href="#"><img src="img/todo.png" title="" width="100px"></a>
          </div>
          <div class="content-head">
            <p>
              Планировщик задач
            </p>
          </div>
        </div>

  <div id="root">
    <div class="container">
      <h3>Добавить задачу</h3>
      <input type="text" id="new-task">
      <button id="add">Добавить</button>
      <hr>
      <h3>Список задач</h3>
      <ul id="unfinished-tasks">

        

      </ul>

      <h3>Завершенные дела</h3>

      <ul id="finished-tasks">

      

      </ul>

    </div>
  </div>


  <footer>
    <?php
    drawMenu($menu);
    ?>
    <div class="date">
      <span>2020</span>
    </div>
  </footer>


  <script src="js/to_do.js"></script>
</body>
</html>