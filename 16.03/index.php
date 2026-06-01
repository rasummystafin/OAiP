<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Формы</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>напишите фразу </label>
        <input type="text" name="text" required><br>
        <button type="submit">Отправить</button>
    </form>
<?php
$text1 = ($_POST["text"] ?? '');
echo "ваш текст: ". $text1. "<br><br>";
?>

    <form action="index.php" method="post">
        <label>первое число: </label>
        <input type="number" name="number2a" required><br>
        <label>вторая число: </label>
        <input type="number" name="number2b" required><br>

        <button type="submit">Отправить</button>
    </form>
<?php
$summa2a = ($_POST["number2a"] ?? 0);
$summa2b = ($_POST["number2b"] ?? 0);
echo "сумма ваших чисел: ". $summa2a + $summa2b. "<br><br>";
?>
    <form action="index.php" method="post">
        <label>ваше имя: </label>
        <input type="text" name="name3" required><br>

        <label>ваш пол: </label><br>
        <input type="radio" name="status" value="0"> мужской
        <input type="radio" name="status" value="1"> женский<br>
        
        <label>ваш год рождения: </label><br>
        <input type="number" name="age3" required><br><br>
        
        <button type="submit">Отправить</button>
    </form>
<?php
$name3 = ($_POST["name3"] ?? '');
$status3 = ($_POST["status"] ?? '');
$age = ($_POST["age3"] ?? 0);
if ($status3 === "0"){
    echo "здравче будь мудрый и великий  ". $name3. "<br>"; 
} else {
    echo "приветствую вас миссис  ". $name3. "<br>";
};
$age3 = 2026 - $age; 
if($age3 <= 0){
    echo "вы из будущего?". "<br><br>";
} else {
    echo "ваш возраст ".  $age3. "<br><br>";
};
?>
    <form action="index.php" method="post">
        <label>ваше количество рублей: </label>
        <input type="number" name="number4a" required><br>
        
        <label>ваша валюта: </label><br>
        <select name="id4">
    <option value=71.45>USD</option>
    <option value=83.08>EUR</option>
    <option value=10.52>CNY</option></select>
        <button type="submit">Отправить</button>
    </form>
<?php
$publ = $_POST["number4a"] ?? 0;
$valuta = $_POST["id4"] ?? 1;
echo "ваша сумма: ". $publ. " в выбранной валюте: ". ($publ / $valuta);
?>
    <form action="index.php" method="post">
        <label>выберите цвет фона: </label>
        <select name="id5">
    <option value="black">Чёрный </option>
    <option value="yellow">Жёлтый </option>
    <option value="red">Красный </option></select>
        <button type="submit">Отправить</button>
    </form>
    <?php
$color = $_POST["id5"] ?? "red";
    if ($color === "black"){
        ?><body style="background: black">ввывывывы</body><?php
    } elseif ($color === "yellow"){
        ?><body style="background: yellow"></body><?php
    } elseif ($color === "red"){
        ?><body style="background: red"></body><?php
}    ?>
    <form action="index.php" method="post">
        <label>введите текст </label>
        <input type="text" name="text6" required><br>
        <button type="submit">Отправить</button>
    </form>
    <?php
$parol = $_POST["text6"] ?? '';
if ($parol === "Админ"){
    echo "добро пожаловать в систему";
} else {
    echo "Доступ разрешён";
}
    ?>
</body>
</html>