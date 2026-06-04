<?php
session_start();
if(isset($_SESSION['user_id'])) {
    header("Location: news.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Вход</a>
            <a href="reg.php">Регистрация</a>
        </nav>
    </header>
    
    <main>
        <h1>Регистрация</h1>
        <form action="save_reg.php" method="post">
            <label>Логин:</label>
            <input type="text" name="login" required>
            
            <label>Ваше имя:</label>
            <input type="text" name="name">
            
            <label>Пароль:</label>
            <input type="password" name="pass" required>
            
            <button type="submit">Зарегистрироваться</button>
        </form>
        
        <p><a href="index.php">Уже есть аккаунт? Войдите</a></p>
    </main>
    
    <footer>
        <p>Система управления новостями &copy; 2026</p>
    </footer>
</body>
</html>