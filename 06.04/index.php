<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Вход</h1>
        
        <form action="login.php" method="post">
            <label>Логин:</label>
            <input type="text" name="logins" required>
            
            <label>Пароль:</label>
            <input type="password" name="passwords" required>
            
            <button type="submit">Войти</button>
        </form>
    </main>
    
    <footer>
        <p>Система управления заявками &copy; 2024</p>
    </footer>
</body>
</html>