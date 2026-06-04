<?php
session_start();
require_once "connect.php";

$login = $_POST["login"];
$password = $_POST["password"];

$result = $connect->query("SELECT * FROM users WHERE login = '$login' AND password = '$password'");
$user = $result->fetch_assoc();

$_SESSION['user_id'] = $user['id'];
$_SESSION['user_login'] = $user['login'];
$_SESSION['user_email'] = $user['email'];

header("Location: profile.php");
?>