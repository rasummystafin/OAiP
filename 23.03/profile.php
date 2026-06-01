<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require_once "connect.php";
    $result = mysqli_query($connect, "SELECT * FROM users ORDER BY id DESC LIMIT 1");
    $user = mysqli_fetch_assoc($result);
    ?>
    
    <h1>Профиль пользователя</h1>
    
    <div class="info-row">
        <span class="label">Логин:</span>
        <span class="value"><?php echo htmlspecialchars($user['login'] ?? 'Не указан'); ?></span>
    </div>
    
    <div class="info-row">
        <span class="label">Email:</span>
        <span class="value"><?php echo htmlspecialchars($user['email'] ?? 'Не указан'); ?></span>
    </div>
    
    <div class="info-row">
        <span class="label">ID:</span>
        <span class="value"><?php echo htmlspecialchars($user['id'] ?? '0'); ?></span>
    </div>
        <p>Здесь пока ничего нет</p>

    
    <a href="index.php">Назад</a>
</body>
</html>