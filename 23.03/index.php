<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="registscrypt.php" method="post">
        <h1>Регистрация</h1>
        <label>Введите ваш логин:</label>
        <input type="text" name="login" placeholder="например: user123" required>
        
        <label>Введите ваш пароль:</label>
        <input type="password" name="password" placeholder="минимум 6 символов" required>
        
        <label>Введите вашу почту:</label>
        <input type="email" name="email" placeholder="example@mail.com" required>
        
        <button type="submit">Зарегистрироваться</button>
    </form>
</body>
</html>