<?php
session_start();
require_once "connect.php";

$login = $_POST["login"];
$pass = $_POST["pass"];

$res = $connect->query("SELECT * FROM users WHERE login = '$login' AND password = '$pass'");

if($res->num_rows > 0) {
    $user = $res->fetch_assoc();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_login'] = $user['login'];
    $_SESSION['user_name'] = $user['name'];
    header("Location: news.php");
} else {
    header("Location: index.php?error=1");
}
?>