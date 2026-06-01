<?php
$price = 1500;
$shipping = 200;
$priceANDshipping = $price + $shipping;
$name = "автомат АК74";

echo "название товара ". $name. "<br>";
echo "стоимость товара ". $price. "<br>";
echo "стоимость товара с доставкой ". $priceANDshipping. "<br>". "<br>";



$zp_vasi = 25000;
$zp_peti = 30000;

$zp_vasi_new_ear = $zp_vasi * 1.2;
$zp_peti_new_ear = $zp_peti * 1.15;

echo "зарплата Васи в новом году ". $zp_vasi_new_ear. "<br>";
echo "зарплата Пети в новом году ". $zp_peti_new_ear. "<br>". "<br>";



$jon = 100;
$stolerman = 150;
$ivan = 235;

echo "колво акций у Джона в % ". 1000 / $jon. "<br>". "колво акций у Столермана в % ". 1000 / $stolerman. "<br>". "колво акций у Ивана в % ". 1000 / $ivan. "<br>";
echo "колво проданных акций ". ($jon + $stolerman + $ivan). "<br>". "колво непроданных акций ". (1000 - $jon - $stolerman - $ivan). "<br>";
?>