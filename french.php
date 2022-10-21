<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Корнеев Никита</title>
    


    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <a href="<?php // начинаем первый PHP скрипт

$name='Reg'; // переменная с текстом ссылки
$link='index.php'; // переменная с адресом ссылки
$current_page=true; // переменная, определяющая активность пункта меню

echo $link; // выводим адрес ссылки
?>"><?php // начинаем второй PHP скрипт

if( $current_page ) // если пункт меню активный
//echo ' class="button_main head_title"'; // выводим соответствующий класс 
//echo $name; // выводим текст ссылки
?><button class = "button_main" style="position: absolute; left: 35%;top:110%; width: 32%;height: 5%;">Вернуться на главную страницу</button></form></a>
   <header class="site-header1 head_title">
      <div class="container">
        <h1>Отзыв</h1>
      </div>
    </header>
    
    <form action = "https://httpbin.org/post" method = "POST" enctype = "multipart/form-data" style = "position: absolute; left: 40%;top:23%; width: 45%;">    
        <label for = "last_name">Фамилия <br><em></em></label>
        <input id = "last_name"><br><br>     
        <label for = "first_name">Имя<br><em></em></label>
        <input id = "first_name"><br><br>
        <label for = "second_name">Отчество<br><em></em></label>
        <input id = "second_name"><br><br>
        <label for = "email" >Email<br><em></em></label>
        <input id = "email"><br><br>
        <label for = "sex">Вид<br></label>
        <select id = "sex">
          <option value = "appeal">Жалоба</option>
          <option value = "handling">Предложение</option>
        </select><br>

        <label for = "telephone">Откуда узнали о нас<br></label>
        <label>
            <input type="radio" name="question" value="yes">
            Реклама
          </label>
          <label><br>
            <input type="radio" name="question" value="no">
            Сторнние сайты 
          </label>
        <p><input type = "file" name = "photo" multiple accept = "image/*,image/jpeg"></p>
        <textarea style="background: #ffffff;border: 2px solid #ffffff; width: 305px; height: 80px; box-sizing: border-box; font-size: 14px; resize: none;">
          </textarea> 
    <p><input type = "submit" class = "button_main" value="          Отправить         "></p>
    <input type="checkbox">
    Даю согласие на обработку данных
  </label><br><br>
  </form>

  <footer class="site-footer" style = "position: absolute; left: 0%;top:120%; width: 100%; height: 10%;">
      <div class="site-footer1">
      <p>Корнеев Никита Владимирович</p>
        <p> <?php require('time.php'); ?> </p>
        <p> <?php require('photo.php'); ?> </p>
        <p>8-912-008-1581</p>
      </div>
    </footer>
  </body>
</html>