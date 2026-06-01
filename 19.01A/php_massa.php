<?php
echo ("задание 1 <br>");
$massa = [1, 33, 3, 654, -4];
$sas = 0;

foreach ($massa as $ygor) {
    $sas += $ygor ;
};
print_r ($sas);



echo ("<br> задание 2 <br>");
$massa = [3, 4, 2, 864, -123456, 2008];
$lvl = 0;
foreach ($massa as $znac) {
    if ($lvl > $znac) {
        $znac = $lvl;
    } else {
        $lvl = $znac;
    };
};
print_r ($lvl);



echo ("<br> задание 3 <br> ");
$massa = [1, 54, 3, 8, 7, 873, 22, 5, 4];
$kolvo = 0;
foreach ($massa as $chisla) {
    if ($chisla % 2 === 0){
        $kolvo += 1;
    };
};
print_r ($kolvo);



echo ("<br> задание 4 <br> ");
$massa = [1, 54, 3, 8, 7, 22, 5, 4];
$a = 0;
$b = 0;
foreach ($massa as $ar) {
    $a += 1;
    $b += $ar;
};
$sr_arif = ($b / $a);
print_r ($sr_arif);



echo ("<br> задание 5 <br> ");
$massa = [1, -3, 3, 8, -7, -987654, 5, 4];
$otvet = 0;
foreach ($massa as &$dd){
    if ($dd < 0){
        $dd = 0;
    }
};
print_r ($massa);



echo ("<br> задание 6 <br> ");
$massa = [1, 54, 3, 8, 7, 22, 5, 4];
$resas = [];
foreach ($massa as $aim) {
    array_unshift($resas, $aim);
};
print_r ($resas);



echo ("<br> задание 7 <br> ");
$massa = [1, 54, 3, 8, 7, 22, 5, 1];
$x = 1;
$r = [];
foreach ($massa as $i => $ds) {
    if ($ds == $x) {
        $d = $i + 1;
        array_unshift($r, $d);
    };
};
print_r ($r);



echo ("<br> задание 8 <br> ");
$massa = [1, 54, 3, 8, 7, 22, 5, 4];
$a = 0;
$b = 0;
$s = 0;
foreach ($massa as $ar) {
    $a += 1;
    $b += $ar;
};
$sr_arif = ($b / $a);
foreach ($massa as $rar) {
    if ($rar > $sr_arif) {
        $s += 1;
    }
};
print_r ($s);



echo ("<br> задание 9 <br> ");
$strki = ["rererereREREletsgo", "my name is chiki", "my name is chacha", "rar", "sas"];
$r = [];
foreach ($strki as $i => $sas) {
    $length = strlen($strki[$i]); 
    if ($length > 5){
        array_unshift($r, $sas);
    }
};
print_r ($r);



echo ("<br> задание 10 <br> ");
$massa = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$mdr = [];
$vich = 0;
foreach ($massa as $v) {
    foreach ($massa as $y){
        $vich = $v * $y;
    array_unshift($mdr, $vich);
    };
    $mdr = array_reverse($mdr);
    print_r ($mdr);
    echo ("<br>");
    $mdr = [];
};
?>