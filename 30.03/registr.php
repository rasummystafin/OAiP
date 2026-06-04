<?php
require_once "connect.php";

$login = $_POST["login"];
$password = $_POST["password"];
$email = $_POST["email"];
$msq = "INSERT INTO `users` (`login`, `password`, `email`) VALUES ('$login', '$password', '$email')";
mysqli_query($connect, $msq);
header("Location: profile.php");
?>