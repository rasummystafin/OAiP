<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="registr.php" method="post">
        <h1>Регистрация</h1>
        <label>Логин:</label>
        <input type="text" name="login" required>
        
        <label>Пароль:</label>
        <input type="password" name="password" required>
        
        <label>Почта:</label>
        <input type="email" name="email" required>
        
        <button type="submit">Зарегистрироваться</button>
    </form>
    
    <p><a href="login.php">Уже есть аккаунт? Войдите</a></p>
</body>
</html>