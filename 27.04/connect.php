<?php
$connect = mysqli_connect('127.0.0.1:3306', 'root', '', 'novosti');

if(!$connect){
    die("Ошибка подключения");
}

mysqli_set_charset($connect, "utf8");
?>