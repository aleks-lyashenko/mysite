<!DOCTYPE html>
<html>

<head>
  <title>Делаем так же: главная страница Яндекса</title>
  <style>
    body {
      /*подключаем сетку*/
      display: grid;
      /*общий размер — вся высота экрана*/
      height: 100vh;
      /*разбиваем на три части — первая и последняя зависят от содержимого, а средняя занимает всё оставшееся место*/
      grid-template-rows: auto 1fr auto;
      margin: 0;

      /*настройки шрифта*/
      font-size: 0.8em;
      line-height: normal;
      font-family: Arial, Helvetica, sans-serif;
    }

    header {
      /*настройки шапки*/
      margin: 10px;
      text-align: right;
      
    }

    main {
      /*настройки основной части*/
      display: grid;
      place-items: center;
      font-size: 19px;
    }

    footer {
      /*настройки подвала*/
      display: grid;
      place-items: center;
    }

    /*делаем жёлтые рамки у поля ввода*/
    input{
      border: 4px solid #ffdb4d;
      font-size: 30px;
    }

    /*отключаем встроенное оформление для ссылок*/
    a{
      text-decoration: none;
    }

    .st{
      /*отключаем стандартное оформление*/
      appearance: none;
      border: 0;
      /*делаем кнопку жёлтой*/
      background-color: #ffdb4d;
      /*размер шрифта и кнопки*/
      font-size: 20px;
      width: 70px;
      height: 44px;
      /*настраиваем отступы*/
      padding: 9px;
      padding-top: 14px;
      padding-bottom: 10px;
      /*сдвигаем текст вплотную к кнопке*/
      margin-left: -6px;
    }

  </style>
</head>

<body>
  <!-- подключаем поиск в Яндексе по нажатию на кнопку -->
  <script type="text/javascript">
    function search() {
      // получаем содержимое поля ввода
      var t = document.getElementById("srch").value;
      // формируем новый адрес со строкой поиска
      t = "https://yandex.ru/search/?text=" + t;
      // открываем страницу с результатами
      window.location.href = t;
    }  
  </script>
  <header>
     <a href="https://mail.yandex.ru/">Войти в почту</a>
  </header>

<main> 
  <div>
    <!-- поле ввода -->
    <input id = "srch" type="text" size="20">
    <!-- кнопка «Найти» -->
    <button class="st" onclick="search()">Найти</button>
  </div>
</main>

  <footer>
    <!-- логотип -->
    <img src="https://yastatic.net/s3/home-static/_/x/Q/xk8YidkhGjIGOrFm_dL5781YA.svg" style="max-height: 50%;">
  </footer>
  
  <script src="js/alarm.js"></script>
</body>
</html>