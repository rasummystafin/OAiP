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
    <title>Создание заявки</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш_api_ключ&lang=ru_RU" type="text/javascript"></script>
    <script>
        function initMap(address) {
            ymaps.ready(function() {
                var map = new ymaps.Map("map", {
                    center: [55.76, 37.64],
                    zoom: 10
                });
                
                if(address) {
                    ymaps.geocode(address).then(function(res) {
                        var coords = res.geoObjects.get(0).geometry.getCoordinates();
                        map.setCenter(coords, 15);
                        map.geoObjects.add(new ymaps.Placemark(coords, {
                            balloonContent: address
                        }));
                    });
                }
            });
        }
        
        function showOnMap() {
            var address = document.getElementById('map_address').value;
            if(address) {
                window.open('https://maps.yandex.ru/?text=' + encodeURIComponent(address), '_blank');
            }
        }
        
        function showHospitalMap() {
            var hospitalAddress = "г. Москва, ул. Больничная, д. 10";
            window.open('https://maps.yandex.ru/?text=' + encodeURIComponent(hospitalAddress), '_blank');
        }
    </script>
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
        <h1>Создание заявки</h1>
        
        <div class="two-columns">
            <div class="form-col">
                <form action="zaiva.php" method="post">
                    <label>Полный адрес:</label>
                    <input type="text" id="map_address" name="adress" required>
                    <button type="button" onclick="showOnMap()">Показать на карте</button>
                    
                    <label>Номер:</label>
                    <input type="text" name="number" required>
                    
                    <label>ФИО:</label>
                    <input type="text" name="fio" required>
                    
                    <label>Дата и время:</label>
                    <input type="datetime-local" name="datetime" required>
                    
                    <button type="submit">Отправить заявку</button>
                </form>
            </div>
            
            <div class="map-col">
                <div class="hospital-info">
                    <h3>Больница №1</h3>
                    <p><strong>Адрес:</strong> г. Москва, ул. Больничная, д. 10</p>
                    <p><strong>Телефон:</strong> +7 (495) 123-45-67</p>
                    <p><strong>Часы работы:</strong> Круглосуточно</p>
                    <button onclick="showHospitalMap()" class="map-btn">Построить маршрут до больницы</button>
                </div>
                <div id="map" style="width:100%; height:300px; margin-top:15px;"></div>
            </div>
        </div>
    </main>
    
    <footer>
        <p>Система управления заявками &copy; 2024</p>
    </footer>
    
    <style>
        .two-columns {
            display: flex;
            gap: 30px;
            margin-top: 20px;
        }
        .form-col {
            flex: 1;
        }
        .map-col {
            flex: 1;
        }
        .hospital-info {
            background: #f0f0f0;
            padding: 15px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
        }
        .hospital-info h3 {
            margin-top: 0;
        }
        .map-btn {
            background: #333;
            color: white;
            border: none;
            padding: 8px 15px;
            cursor: pointer;
        }
        .map-btn:hover {
            background: #555;
        }
        button[type="button"] {
            margin-bottom: 15px;
        }
        @media (max-width: 768px) {
            .two-columns {
                flex-direction: column;
            }
        }
    </style>
    
    <script>
        ymaps.ready(init);
        function init() {
            var hospitalAddress = "г. Москва, ул. Больничная, д. 10";
            ymaps.geocode(hospitalAddress).then(function(res) {
                var coords = res.geoObjects.get(0).geometry.getCoordinates();
                var map = new ymaps.Map("map", {
                    center: coords,
                    zoom: 16
                });
                map.geoObjects.add(new ymaps.Placemark(coords, {
                    balloonContent: "Больница №1<br>г. Москва, ул. Больничная, д. 10"
                }));
            });
        }
    </script>
    <script>
        initMap("");
    </script>
</body>
</html>