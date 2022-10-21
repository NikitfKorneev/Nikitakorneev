<?php 
    define('DB_HOST', 'std-mysql.ist.mospolytech.ru'); //Адрес
    define('DB_USER', 'std_2003_books'); //Имя пользователя
    define('DB_PASSWORD', 'std_2003_books'); //Пароль
    define('DB_NAME', 'std_2003_books'); //Имя БД
    $mysql = new mysql(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
?>