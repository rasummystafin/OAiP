<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Профиль пользователя</h1>
    
    <div class="info-row">
        <span class="label">ID:</span>
        <span class="value"><?php echo $_SESSION['user_id']; ?></span>
    </div>
    
    <div class="info-row">
        <span class="label">Логин:</span>
        <span class="value"><?php echo $_SESSION['user_login']; ?></span>
    </div>
    
    <div class="info-row">
        <span class="label">Email:</span>
        <span class="value"><?php echo $_SESSION['user_email']; ?></span>
    </div>
    
    <p><a href="login.php">На главную</a></p>
</body>
</html>