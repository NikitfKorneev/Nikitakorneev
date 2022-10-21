<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Корнеев Никита</title>
    


    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <header class="site-header1">
      <div class="container">
        <h1>Вход</h1>  
      </div>
    </header>


    <form action = "https://httpbin.org/post" method = "POST" enctype = "multipart/form-data" style = "position: absolute; left: 40%;top:23%; width: 45%;">    
    
       <label for = "email" >Логин <br><br><em></em></label>
        <input id = "email"><br>
        <label for = "password" >Пароль <br><br><em></em></label>
        <input id= "password" type = "password"><br>
          <input type="checkbox">
          Запомнить данные
        </label><br><br>
      <p><input type = "submit" class = "button_main" value="Зарегестрироваться"></p>
  </form>
  <a href="<?php // начинаем первый PHP скрипт

$name='Index'; // переменная с текстом ссылки
$link='index.php'; // переменная с адресом ссылки
$current_page=true; // переменная, определяющая активность пункта меню

echo $link; // выводим адрес ссылки
?>"><?php // начинаем второй PHP скрипт

if( $current_page ) // если пункт меню активный
//echo ' class="button_main head_title"'; // выводим соответствующий класс 
//echo $name; // выводим текст ссылки
?><button class = "container" style = "position: absolute; left: 40%;top:55%; width: 10%;height: 5%;">Вернуться на главную страницу</button></a>
    <footer class="site-footer" style = "position: absolute; left: 0%;top:93%; width: 100%; height: 10%;">
      <div class="site-footer1">
      <p>Корнеев Никита Владимирович</p>
        <p> <?php require('time.php'); ?> </p>
        <p> <?php require('photo.php'); ?> </p>
        <p>8-912-008-1581</p>
      </div>
    </footer>
  </body>
</html>