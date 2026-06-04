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
    <title>Вход</title>
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
        <h1>Вход</h1>
        
        <?php if(isset($_GET['error'])): ?>
            <div class="error">Неверный логин или пароль</div>
        <?php endif; ?>
        
        <form action="proverka.php" method="post">
            <label>Логин:</label>
            <input type="text" name="login" required>
            
            <label>Пароль:</label>
            <input type="password" name="pass" required>
            
            <button type="submit">Войти</button>
        </form>
        
        <p><a href="reg.php">Нет аккаунта? Зарегистрируйтесь</a></p>
    </main>
    
    <footer>
        <p>Система управления новостями &copy; 2026</p>
    </footer>
</body>
</html>