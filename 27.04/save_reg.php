<?php
session_start();
require_once "connect.php";

$login = $_POST["login"];
$name = $_POST["name"];
$pass = $_POST["pass"];

if(empty($login) || empty($pass)) {
    echo "офыбка";
    exit();
}

$check = $connect->query("SELECT id FROM users WHERE login = '$login'");

if($check->num_rows > 0) {
    header("Location: reg.php?error");
    exit();
}

$sql = "INSERT INTO users (login, name, password) VALUES ('$login', '$name', '$pass')";

if($connect->query($sql)) {
    $user_id = $connect->insert_id;
    $_SESSION['user_id'] = $user_id;
    $_SESSION['user_login'] = $login;
    $_SESSION['user_name'] = $name;
    header("Location: news.php");
    exit();
} else {
    echo "офыбка";
    exit();
}
?>