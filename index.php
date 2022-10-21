<?php include("title.php");?>
<?php $array = [
    '<li>Могу потдержать совершенно различные разговоры</li>',
    '<li>Готов обучатся и узнвать новое</li>',
    '<li>Могу выслушать вас</li>',
    '<li>Увлекаюсь видео играми</li>',
    '<li>Хорошо могу донести информаицю до людей</li>',
]
 ?>
 <!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title><?php echo($index); ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    
    <header class="site-header">
      <div class="container">
        <h1>Основаная информация</h1>
        <a href="<?php // начинаем первый PHP скрипт

      $name='Reg'; // переменная с текстом ссылки
      $link='auto.php'; // переменная с адресом ссылки
      $current_page=true; // переменная, определяющая активность пункта меню

      echo $link; // выводим адрес ссылки
      ?>"><?php // начинаем второй PHP скрипт

      if( $current_page ) // если пункт меню активный
      //echo ' class="button_main head_title"'; // выводим соответствующий класс 
      //echo $name; // выводим текст ссылки
      ?><button class = "button_main" style = "position: absolute; left: 20%;top:30%; width: 15%;height: 20%;">Вход</button></a>
      
        <a href="<?php // начинаем первый PHP скрипт

      $name='French'; // переменная с текстом ссылки
      $link='french.php'; // переменная с адресом ссылки
      $current_page=true; // переменная, определяющая активность пункта меню

      echo $link; // выводим адрес ссылки
      ?>"><?php // начинаем второй PHP скрипт

      if( $current_page ) // если пункт меню активный
      //echo ' class="button_main head_title"'; // выводим соответствующий класс 
      //echo $name; // выводим текст ссылки
      ?><button class = "button_main" style = "position: absolute; left: 70%;top:30%; width: 15%;height: 20%;">Обратная связь</button></a>
      </div>
    </header>
    <section class="features">
      <h2>Обо мне!</h2>
      <p class="feature-furniture">Студент 2 курс</p>
      <p class="feature-lighting">Обучаюсь на направлении ФИТ</p>
      <p class="feature-accessories">Основной род деятельности программирование</p>
    </section>

    <section class="advantages">
      <h2>Чем я могу заинтересовать?</h2>
      <ul class="advantages-list">
      <div class = "advantages-item" style = "left: 35%;top:735%; width: 30%; height: 10%;">
      <ul>
        <?php for($i = 0; $i <count($array); $i++ ) {
        echo $array[$i];
      } ?>
      </ul>
    </div>
      
        <table border ="2" width="600px">
        <tr>
          <td>Студент</td>
          <td>2 Курс</td>
          <td>ФИТ</td>
        </tr>    
        <tr>
          <td>Политех</td>
          <td>Вэб-круто</td>
          <td>Скоро сессия</td>
        </tr>    
        </table>
      </ul>
    </section>

    <footer class="site-footer">
      <div class="container">
        <p>Корнеев Никита Владимирович</p>
        <p> <?php require('time.php'); ?> </p>
        <p> <?php require('photo.php'); ?> </p>
        <p>8-912-008-1581</p>
      </div>

    </footer>
  </body>
</html>
