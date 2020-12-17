<?php
  require_once "_temp.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="img/icons/lock1.ico" type="image/x-icon">
  <title>Ввод данных в таблицу</title>
</head>
<body>
  <div class="wrapper">
    <div class="container">
      <header class="header">
        <div class="content">
          <div class="content-image">
            <a href="pass.php"><img src="img/lock1.png" title="Перейти на главную" width="100px"></a>
          </div>
          <div class="content-head">
            <p>
              Ввод данных в таблицу
            </p>
          </div>
          <div class="input">
              <form method="POST" action="input.php">
                <input name="service" type="text" placeholder="Сервис"/>
                <input name="login" type="text" placeholder="Логин"/>
                <input name="password" type="password" placeholder="Пароль"/>
                <input name="img" type="text" placeholder="Путь к картинке"/>
                <input type="submit" value="Отправить"/>
              </form>
          </div>

            <?php
              require_once 'connection.php'; // подключаем скрипт
              
              $link = mysqli_connect($host, $user, $password, $database) 
                  or die("Ошибка " . mysqli_error($link));

              $service = $_POST['service'];
              $login = $_POST['login'];
              $password = $_POST['password'];
              $img = $_POST['img'];

              $query = "INSERT INTO `pass` 
                (id, service, login, password, img) 
                VALUES  (NULL, '".$service."', '".$login."', '".$password."', '".$img."')";
              $result = mysqli_query($link, $query) or die("Ошибка" . mysqli_error($link));
              mysqli_close($link);
            ?>      
        </div>

      </header>
      <footer>
        <?php
        drawMenu($menu);
        ?>
        <div class="date">
          <span>2020</span>
        </div>
      </footer>
    </div>
  </div>

  <script src="js/main.js"></script>
</body>
</html>

