<?php 
$menu = [
  ["href"=>"index.php", "link"=>"Главная"],
  ["href"=>"pass.php", "link"=>"Поиск паролей"],
  ["href"=>"to_do.php", "link"=>"Планировщик задач"],
  ["href"=>"search.php", "link"=>"Поисковик"],
  ["href"=>"sandbox.php", "link"=>"Песочница"],
];

function drawMenu ($menu) {
  echo "<div class='footer-menu'>";
  echo "<ul class='list'>";
  foreach ($menu as $key) {
    echo "<li class='link'><a href='{$key["href"]}'>{$key["link"]}</a></li>";
  }
  echo "</ul>";
  echo "</div>";

}