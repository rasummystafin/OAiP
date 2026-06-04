<?php
session_start();
if(!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
require_once "connect.php";

$id = $_GET['id'];

$res = $connect->query("SELECT * FROM news WHERE id = $id");
$news = $res->fetch_assoc();

$connect->query("UPDATE news SET views = views + 1 WHERE id = $id");

if(isset($_POST['komment'])) {
    $komment = $_POST['komment'];
    $author = $_SESSION['user_login'];
    $connect->query("INSERT INTO comments (news_id, author, comment) VALUES ($id, '$author', '$komment')");
    header("Location: novost.php?id=$id");
    exit();
}

$komm_res = $connect->query("SELECT * FROM comments WHERE news_id = $id ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $news['title']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <a href="news.php">Главная</a>
            <a href="add_novost.php">Добавить новость</a>
            <a href="categories.php">Категории</a>
            <a href="exit.php">Выход (<?php echo $_SESSION['user_login']; ?>)</a>
        </nav>
    </header>
    
    <main>
        <h1><?php echo $news['title']; ?></h1>
        
        <div>
            Раздел: <?php echo $news['category']; ?> | 
            Дата: <?php echo date('d.m.Y', strtotime($news['news_date'])); ?> | 
            Просмотров: <?php echo $news['views']; ?>
        </div>
        
        <div class="news-content">
            <?php echo nl2br($news['content']); ?>
        </div>
        
        <p><a href="news.php">← Назад</a></p>
        
        <h2>Комментарии (<?php echo $komm_res->num_rows; ?>)</h2>
        
        <form method="post">
            <textarea name="komment" rows="4" style="width:500px;" placeholder="Ваш комментарий..."></textarea><br>
            <button type="submit">Добавить</button>
        </form>
        
        <?php 
if($komm_res->num_rows > 0) {
    while($komm = $komm_res->fetch_assoc()) {
        echo '<div class="comment">';
        echo '<b>' . $komm['author'] . '</b><br>';
        echo nl2br($komm['comment']);
        echo '</div>';
    }
} else {
    echo '<p class="empty">Нет комментариев</p>';
}
?>
    </main>
    
    <footer>
        <p>Новостной портал &copy; 2026</p>
    </footer>
</body>
</html>