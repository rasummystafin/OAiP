<?php
session_start();
if(!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
require_once "connect.php";

$res = $connect->query("SELECT * FROM news ORDER BY news_date DESC");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
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
        <h1>Новости</h1>
        
        <?php if($res->num_rows > 0) { ?>
            <table>
                <tr>
                    <th>Новость</th>
                    <th>Раздел</th>
                    <th>Просмотры</th>
                </tr>
                <?php while($row = $res->fetch_assoc()) { ?>
                    <tr>
                        <td>
                            <b><a href="novost.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></b>
                            <div style="font-size:12px; color:#666;"><?php echo date('d.m.Y', strtotime($row['news_date'])); ?></div>
                            <div class="anons"><?php echo mb_substr($row['content'], 0, 100); ?>...</div>
                        </td>
                        <td class="razdel"><?php echo $row['category']; ?></td>
                        <td class="prosmotr"><?php echo $row['views']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <p class="empty">Новостей пока нет</p>
        <?php } ?>
    </main>
    
    <footer>
        <p>Система управления новостями &copy; 2026</p>
    </footer>
</body>
</html>