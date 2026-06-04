<?php
session_start();
if(!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
require_once "connect.php";

$cat_res = $connect->query("SELECT * FROM categories ORDER BY level, name");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавить новость</title>
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
        <h1>Добавить новость</h1>
        
        <form action="save_novost.php" method="post">
            <label>Заголовок:</label>
            <input type="text" name="title" required>
            
            <label>Текст:</label>
            <textarea name="content" rows="10" required></textarea>
            
            <label>Дата:</label>
            <input type="date" name="data" required>
            
            <label>Раздел:</label>
            <select name="category" required>
                <option value="">-- Выберите раздел --</option>
                <?php while($cat = $cat_res->fetch_assoc()) { 
                    $otstup = str_repeat("-", $cat['level']);
                    $display_name = $otstup . " " . $cat['name'];
                ?>
                    <option value="<?php echo $cat['name']; ?>"><?php echo $display_name; ?></option>
                <?php } ?>
            </select>
            
            <button type="submit">Опубликовать</button>
        </form>
    </main>
    
    <footer>
        <p>Система управления новостями &copy; 2026</p>
    </footer>
</body>
</html>