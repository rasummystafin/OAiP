<?php
session_start();
if(!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
require_once "connect.php";

$title = $_POST["title"];
$content = $_POST["content"];
$data = $_POST["data"];
$category = $_POST["category"];

$sql = "INSERT INTO news (title, content, news_date, category, views) VALUES ('$title', '$content', '$data', '$category', 0)";

if($connect->query($sql)) {
    header("Location: news.php");
    exit();
} else {
    echo "офыбка"; . $connect->error;
}
?>