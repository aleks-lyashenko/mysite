<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WEB-песочница</title>
  <style>
    body, iframe {
      margin: 0;
    }

    .container {
      background-color: rgb(255, 254, 254);

      /* background-image: url("img/bg-01.jpg"); */
      background-position: center top;
      background-repeat: no-repeat;

      width: 96%;
      margin: 0 auto;

      display: flex;
      justify-content: space-between;
    }

    .site {
      padding: 5px;
      width: 400px;
      height: 900px;
    }

    .short {
      height: 600px;
      width: 330px;
    }

    .whether {
      overflow: hidden;
    }

    .wide {
      width: 650px;
    }
  </style>
</head>
<body>

  <div class="container">

    <iframe class="site" id="pass" src="https://www.championat.com/stat/" frameborder="0">Надпись</iframe>

    <iframe class="site whether" src="https://m.rp5.ru/%D0%9F%D0%BE%D0%B3%D0%BE%D0%B4%D0%B0_%D0%B2_%D0%92%D0%B0%D0%BB%D1%83%D0%B9%D0%BA%D0%B0%D1%85,_%D0%91%D0%B5%D0%BB%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D1%81%D0%BA%D0%B0%D1%8F_%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C" frameborder="0"></iframe>

    <iframe class="wide" src="to_do.php" frameborder="0"></iframe>

    <iframe class="site short" src="http://192.168.50.151:407/mobile.html" frameborder="0"></iframe>


  </div>

  <div class="radio" style="position: absolute; bottom: 250px; left:81%; text-align:center">
    <h3>РадиоРекорд</h3>
    <audio src="http://air.radiorecord.ru:8101/rr_320" controls>OK</audio>
  </div>
  



</body>
</html>