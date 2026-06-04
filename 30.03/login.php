<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="vxod.php" method="post">
        <h1>Вход</h1>
        <label>Логин:</label>
        <input type="text" name="login" required>
        
        <label>Пароль:</label>
        <input type="password" name="password" required>
        
        <button type="submit">Войти</button>
    </form>
    
    <p><a href="index.php">Нет аккаунта? Зарегистрируйтесь</a></p>
</body>
</html>