<?php
session_start();
if(!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список заявок</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function openMap(address) {
            if(address) {
                window.open('https://maps.yandex.ru/?text=' + encodeURIComponent(address), '_blank');
            }
        }
        
        function routeToHospital(address) {
            var hospital = "г. Москва, ул. Больничная, д. 10";
            window.open('https://maps.yandex.ru/?rtext=' + encodeURIComponent(address) + '~' + encodeURIComponent(hospital), '_blank');
        }
    </script>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            border: 1px solid #ccc;
            text-align: left;
            vertical-align: middle;
        }
        th {
            background: #e0e0e0;
        }
        .small-btn {
            background: #0066cc;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 12px;
            margin: 2px 0;
            display: inline-block;
        }
        .route-btn {
            background: #040082;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 12px;
            margin: 2px 0;
            display: inline-block;
        }
        .small-btn:hover, .route-btn:hover {
            opacity: 0.8;
        }
        select {
            padding: 3px;
        }
        .action-cell {
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="profile.php">Создать заявку</a>
            <a href="zaiva_list.php">Список заявок</a>
            <a href="logout.php">Выход</a>
        </nav>
    </header>
    
    <main>
        <h1>Список заявок</h1>
        
        <form method="GET" action="" style="margin-bottom: 20px;">
            <label>Найти заявку по ФИО:</label>
            <input type="text" name="search" 
                   placeholder="Введите фамилию или имя"
                   value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>"
                   style="width: 200px;">
            <button type="submit">Найти</button>
            <a href="zaiva_list.php">Показать все</a>
        </form>

        <?php
        require_once "connect.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_status']) && isset($_POST['id']) && isset($_POST['status'])) {
            $id = $_POST['id'];
            $new_status = $_POST['status'];
            $update_sql = "UPDATE zaiva SET status = '$new_status' WHERE id = '$id'";
            $connect->query($update_sql);
            header("Location: zaiva_list.php");
            exit();
        }

        $search = isset($_GET['search']) ? $_GET['search'] : '';

        if (!empty($search)) {
            $sql = "SELECT * FROM zaiva WHERE fio LIKE '%$search%' ORDER BY datetime DESC";
            $result = $connect->query($sql);
        } else {
            $sql = "SELECT * FROM zaiva ORDER BY datetime DESC";
            $result = $connect->query($sql);
        }

        if (!empty($search)) {
            echo "<p>Вы искали: <strong>" . htmlspecialchars($search) . "</strong> | ";
            echo "Найдено заявок: <strong>" . $result->num_rows . "</strong></p>";
        }

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Адрес</th>";
            echo "<th>Номер</th>";
            echo "<th>ФИО</th>";
            echo "<th>Статус</th>";
            echo "<th>Дата и время</th>";
            echo "<th>Действия</th>";
            echo "</tr>";
            
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . htmlspecialchars($row['adress']) . "</td>";
                echo "<td>" . htmlspecialchars($row['number']) . "</td>";
                echo "<td>" . htmlspecialchars($row['fio']) . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td>" . $row['datetime'] . "</td>";
                echo "<td class='action-cell'>";
                echo "<button onclick='openMap(\"" . htmlspecialchars($row['adress']) . "\")' class='small-btn'>Показать на карте</button>";
                if($row['status'] == 'В обработке') {
                    echo "<button onclick='routeToHospital(\"" . htmlspecialchars($row['adress']) . "\")' class='route-btn'>Маршрут до больницы</button>";
                }
                echo "<form method='POST' action='' style='margin-top:5px; margin-bottom:0;'>";
                echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                echo "<select name='status'>";
                echo "<option value='В обработке'" . ($row['status'] == 'В обработке' ? 'selected' : '') . ">В обработке</option>";
                echo "<option value='Выполнен'" . ($row['status'] == 'Выполнен' ? 'selected' : '') . ">Выполнен</option>";
                echo "</select>";
                echo "<button type='submit' name='update_status' style='margin-top:0; margin-left:5px;'>Изменить</button>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Заявок не найдено</p>";
        }

        $connect->close();
        ?>
    </main>
    
    <footer>
        <p>Система управления заявками &copy; 2024</p>
    </footer>
</body>
</html>