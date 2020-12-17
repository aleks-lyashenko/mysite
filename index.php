<?php
$login = "admin";
$password = "rooot";

if(isset($_POST) && $_POST['login'] === $login && $_POST['password'] === $password){
  header("Location:pass.php");
} 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/login.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="img/icons/lock1.ico" type="image/x-icon">

  <title>Страница авторизации</title>
</head>
<body>

  <div class="wrapper">
    <div class="container">  
      <div class="title">
        <span class="login">Заходи, если что...</span>
      </div>
      <div class="authorization-form">
        <form action="" method="POST">
          <div class="input-user">
            <span>Username</span>
            <input class="text-box" type="text" name="login" placeholder="Введите username" required>
          </div>
          <div class="input-pass">
            <span class="pass">Password</span>
            <input class="pass-box" type="password" name="password" placeholder="Введите password" required>
          </div>
            <input class="btn" type="submit" value="Войти">
        </form> 
      </div>
      <div class="vhod">
        <span>Или авторизуйся с помощью</span>
      </div>
      <div class="social">
        <div class="social-item" id="twitter"><a href=""><img src="img/twitter.png" alt=""></a></div>
        <div class="social-item" id="google"><a href=""><img src="img/google+.png" alt=""></a></div>
        <div class="social-item" id="facebook"><a href=""><img src="img/facebook.png" alt=""></a></div>
      </div>
    </div>      
  </div>

  <script>
    twitter.onclick = function name(params) {
      alert ('Эта функция еще не добавлена');
    }
    google.onclick = function name(params) {
      alert ('Эта функция еще не добавлена');
    }
    facebook.onclick = function name(params) {
      alert ('Эта функция еще не добавлена');
    }
  </script>
 
</body>
</html>