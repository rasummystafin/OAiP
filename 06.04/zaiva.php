<?php
require_once "connect.php";

$adress = $_POST["adress"];
$number = $_POST["number"];
$fio = $_POST["fio"];
$datetime = $_POST["datetime"];
$status = "В обработке";

$sql = "INSERT INTO zaiva (adress, number, fio, status, datetime) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($connect, $sql);
mysqli_stmt_bind_param($stmt, "sssss", $adress, $number, $fio, $status, $datetime);
    
if (mysqli_stmt_execute($stmt)) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Заявка отправлена</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <nav>
                <a href="index.php">Вход</a>
                <a href="profile.php">Создать заявку</a>
                <a href="zaiva_list.php">Список заявок</a>
            </nav>
        </header>
        
        <main>
            <h1>Заявка успешно отправлена!</h1>
            
            <p><strong>Адрес:</strong> <?php echo htmlspecialchars($adress); ?></p>
            <p><strong>Номер:</strong> <?php echo htmlspecialchars($number); ?></p>
            <p><strong>ФИО:</strong> <?php echo htmlspecialchars($fio); ?></p>
            <p><strong>Статус:</strong> <?php echo htmlspecialchars($status); ?></p>
            <p><strong>Дата и время:</strong> <?php echo htmlspecialchars($datetime); ?></p>
            
            <a href='zaiva_list.php'>Посмотреть все заявки</a>
        </main>
        
        <footer>
            <p>Система управления заявками &copy; 2024</p>
        </footer>
    </body>
    </html>
    <?php
}
?>