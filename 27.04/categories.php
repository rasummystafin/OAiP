<?php
session_start();
if(!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
require_once "connect.php";


if(isset($_POST['add_cat'])) {
    $name = trim($_POST['name']);
    $parent = $_POST['parent'];
    
    if(!empty($name)) {
        if($parent == '0') {
            $connect->query("INSERT INTO categories (name, level) VALUES ('$name', 0)");
        } else {
            $parent_res = $connect->query("SELECT level FROM categories WHERE id = '$parent'");
            if($parent_res->num_rows > 0) {
                $parent_row = $parent_res->fetch_assoc();
                $new_level = $parent_row['level'] + 1;
                $connect->query("INSERT INTO categories (name, level) VALUES ('$name', $new_level)");
            }
        }
    }
    header("Location: categories.php");
    exit();
}


if(isset($_GET['del'])) {
    $id = $_GET['del'];
    $connect->query("DELETE FROM categories WHERE id = '$id'");
    header("Location: categories.php");
    exit();
}


$cat_res = $connect->query("SELECT * FROM categories ORDER BY level, name");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Категории</title>
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
        <h1>Управление категориями</h1>
        <form method="post">
            <label>Новая категория:</label>
            <input type="text" name="name" required>
            
            <label>Родительская категория:</label>
            <select name="parent">
                <option value="0">Корневая категория</option>
                <?php 
                $parent_res = $connect->query("SELECT * FROM categories ORDER BY level, name");
                while($p = $parent_res->fetch_assoc()) {
                    $otstup = str_repeat("-", $p['level']);
                    echo '<option value="' . $p['id'] . '">' . $otstup . ' ' . $p['name'] . '</option>';
                }
                ?>
            </select>
            
            <button type="submit" name="add_cat">Добавить</button>
        </form>
        
        <h2>Список категорий</h2>
        
        <?php 
        if($cat_res->num_rows > 0) { 
            $list_res = $connect->query("SELECT * FROM categories ORDER BY level, name");
        ?>
            <table>
                <tr><th>Название</th><th>Действие</th></tr>
                <?php while($cat = $list_res->fetch_assoc()) { 
                    $otstup = str_repeat("&nbsp;&nbsp;", $cat['level']);
                ?>
                    <tr>
                        <td>
                            <?php echo $otstup; ?>
                            <?php echo $cat['name']; ?>
                        </td>
                        <td>
                            <a href="?del=<?php echo $cat['id']; ?>" style="color:red;">Удалить</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <p>Категорий пока нет</p>
        <?php } ?>
    </main>
    
    <footer>
        <p>Система управления новостями &copy; 2026</p>
    </footer>
</body>
</html>