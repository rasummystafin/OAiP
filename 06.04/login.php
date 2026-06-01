<?php
session_start();
require_once "connect.php";

$logins = $_POST["logins"];
$passwords = $_POST["passwords"];

$sql = "SELECT * FROM hospital WHERE login = '$logins' and password = '$passwords'";
$result = $connect->query($sql);

if ($result->num_rows > 0){
    $user = $result->fetch_assoc();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_login'] = $user['login'];
    header("Location: profile.php");
    exit();
} else {
    echo "Неверный логин или пароль";
    echo "<br><a href='index.php'>Назад</a>";
}
?>