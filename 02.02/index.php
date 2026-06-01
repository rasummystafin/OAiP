<?php
//2.7 3.1 3.3
echo "уровень 2.7 <br>";
echo "задание 1<br>";
$str = 'a bc def ghij';
$slova = explode(' ', $str);
$result = [];
foreach ($slova as $slovo) {
    if (mb_strlen($slovo) <= 3) {
        $result[] = mb_strtoupper($slovo);
    } else {
        $result[] = $slovo;
    };
};
$nStr = implode(' ', $result);
echo $nStr;
echo "<br>";


echo "задание 2<br>";
$b = 'S';
if ($b === mb_strtoupper($b)) {
    echo "Символ в верхнем регистре<br>";
} else {
    echo "Символ в нижнем регистре<br>";
};


echo "задание 3<br>";
$num = 123789;
$str = (string)$num;
$r = '';
for ($i = 0; $i < strlen($str); $i++) {
    $sas = (int)$str[$i];
    if ($sas % 2 === 0) {
        $r .= $str[$i];
    };
};
$nNum = (int)$r;
echo $nNum. "<br><br><br>";


echo "уровень 3.1 <br>";
echo "задание 1<br>";
$num = 12345678;
$str = (string)$num;
$fsf = true;
for ($i = 0; $i < strlen($str) - 1; $i++) {
    if ($str[$i] >= $str[$i + 1]) {
        $fsf = false;
        break;
    };
};
if ($fsf >= 1){
    echo "возрастает<br>";
} else {
    echo "не возрастает<br>";
};


echo "задание 2<br>";
$arr = [1, '', 2, 3, '', 5];
$r = array_filter($arr, function($i) {
    return $i !== '';
});
$r = array_values($r);
print_r($r);
echo "<br>";


echo "задание 3<br>";
$arr = [
    [2, 1, 4, 3, 5],
    [3, 5, 2, 4, 1],
    [4, 3, 1, 5, 2],
];
foreach ($arr as &$s) {
    sort($s);
};
print_r($arr);
echo "<br>";


echo "задание 4<br>";
$arr1 = [1, 2, 3];
$arr2 = [1, 2, 3, 4, 5];
$m = min(count($arr1), count($arr2));
$nArr1 = array_slice($arr1, 0, $m);
$nArr2 = array_slice($arr2, 0, $m);
print_r($nArr1);
echo "<br>";
print_r($nArr2);
echo "<br><br><br>";



echo "уровень 3.3 <br>";
echo "задание 1<br>";
$s = ['sdfdsg', 'ddd', 'easdv', 'sas', 'cbc', 'rfvcx', 'qwerty'];
$f = [];
foreach ($s as $b) {
    if (strlen($b) <= 3) {
        $f[] = $b;
    };
};
print_r($f);
echo "<br>";


echo "задание 2<br>";
$num = 1357;
$str = (string)$num;
$z = true;
for ($i = 0; $i < strlen($str); $i++) {
    $a = (int)$str[$i];
    if ($a % 2 === 0) {
        $z = false;
        break;
    };
};
if ($z >= 1){
    echo "нечётные<br>";
} else {
    echo "чётные<br>";
};


echo "задание 3<br>";
$s = 'abcba';
$r = strrev($s);
if ($s === $r) {
    echo "Слово читается одинаково<br>";
} else {
    echo "Слово не читается одинаково<br>";
};


echo "задание 4<br>";
$arr = [
    [
        [11, 12, 13],
        [14, 15, 16],
        [17, 17, 19],
    ],
    [
        [21, 22, 23],
        [24, 25, 26],
        [27, 27, 29],
    ],
    [
        [31, 32, 33],
        [34, 35, 36],
        [37, 37, 39],
    ],
];
$sum = 0;
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        for ($k = 0; $k < count($arr[$i][$j]); $k++) {
            $sum += $arr[$i][$j][$k];
        };
    };
};
echo "$sum";
?>