<?php
// сделать уровни 1.1 1.3 1.8 1.9 1.10 2.3 2.4 2.5
echo ("уровень 1.1<br>");
echo ("задача 1<br>");
$num = 199;
if($num < 0){
    echo "you num is ОТРИЦАТЕЛЬНОЕ <br>";
} else {
    echo "ваше число is плюсовой значений в шкала цифрь<br>";
}

echo ("задача 2<br>");
$stR = "ю спин ми райт раун, беби райт раун";
echo  (mb_strlen($stR)). "<br>";

echo ("задача 3<br>");
$stR = "лайк а рекорд, беби, райт раун, раун, round";
echo ($stR[-1]. "<br>");

echo ("задача 4<br>");
$num = 200;
if ($num % 2 == 0){
    echo("ваше число чётное <br>");
} else {
    echo("ваше число не чётное<br>");
};

echo ("задача 5<br>");
$srtOne = "чикибамбони";
$strTwo = "чепурдюк";
if ($srtOne[0] == $strTwo[0]) {
    echo ("ваши буквы совпадают<br><br><br>");
} else {
    echo ("ваши буквы не совпадают<br><br><br>");
}
?>



<?php
echo ("уровень 1.3<br>");
echo ("задача 1<br>");
//Дана строка. Если в этой строке более одного символа, выведите в консоль предпоследний символ этой строки.
$str = "sas";
if (mb_strlen($str) > 1){
    echo $str[-2]. "<br>";
} else {
    echo ('на этот случай никто инструкций не давал<br>');
};

echo ("задача 2<br>");
//Даны два целых числа. Проверьте, что первое число без остатка делится на второе.
$numOne = 10;
$numTwo = 2;
if ($numOne % $numTwo == 0){
    echo "ваши числа делятся без остатка<br><br><br>";
} else {
    echo "ваши числа делятся с остатком<br><br><br>";
};
?>



<?php
echo ("уровень 1.8<br>");
echo ("задача 1<br>");
//честно не понял что имеется ввиду под "Заполните массив целыми числами от 1 до 10."
$massa = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];// 1 вариант
//2 вариант:
$lim = 10;
$nedomassa = [];
$i =1;
while ($i <= $lim) {
    $nedomassa[] = $i;
    $i++;
}
print_r ($nedomassa);
echo ("<br>");


echo ("задача 2<br>");
$nedomassa = [];
$lim = 100;
$i =1;
while ($i <= $lim) {
    if($i % 2 == 0){
        $nedomassa[] = $i; 
    }
    $i++;
}
print_r ($nedomassa);
echo ("<br>");


echo ("задача 3<br>");
//[1.456, 2.125, 3.32, 4.1, 5.34] до 1 знака округлить
$num = [1.456, 2.125, 3.32, 4.1, 5.34];
$r = array_map(function($n) {
    return round($n, 1);
}, $num);
print_r($r);
echo ("<br><br><br>");
?>



<?php
echo ("уровень 1.9<br>");
echo ("задача 1<br>");
$STR = ["kasar", "http://sasasasfghj", "somisis kizdar, malailar", "http://nyTipoSSilka"];
$kstr = [];
foreach ($STR as $str) {
    if (strpos($str, 'http://') === 0) {
        $kstr[] = $str;
    }
}
print_r($kstr);
echo ("<br>");


echo ("задача 2<br>");
$str = ['index.html','lilalo','asasassas','kusarigami.html','riba','YAXAXA.html'];
$r = [];
foreach ($str as $s) {
    if (strpos($s, '.html') === strlen($s) - 5) {
        $r[] = $s;
    }
};
print_r($r);
echo ("<br>");


echo ("задача 3<br>");
$num = [100, 200, 540, -100];
$r = [];
foreach ($num as $i) {
    $r[] = ($i + ($i*0.1)); 
};
print_r($r);
echo ("<br><br><br>");
?>



<?php
echo ("уровень 1.10<br>");
echo ("задача 1<br>");
$lim = 100;
$nedomassa = [];
$i =1;
while ($i <= $lim) {
    $nedomassa[] = rand(1, 100);
    $i++;
};
print_r ($nedomassa);
echo ("<br>");


echo ("задача 2<br>");
$num = "12345";
$nkolvo = 0;
$kolvo = mb_strlen($num);
$n_num = -1;

while($nkolvo < $kolvo) {
    $r = $num[$n_num];
    echo $r;
    $nkolvo++;
    $n_num--;
}
echo ("<br>");


echo ("задача 3<br>");
$arrrrr = [1, 2, 3, 4, 5, 6];
for ($i = 0; $i < count($arrrrr); $i += 2) {
    $r_arrrrr = array_slice($arrrrr, $i, 2);
    print_r($r_arrrrr);
}
echo ("<br>");


echo ("задача 4<br>");
$ar1 = [1, 2, 3];
$ar2 = [4, 5, 6];
$nAr = array_merge($ar1, $ar2);
print_r($nAr);
echo ("<br><br><br>");
?>


<?php
echo ("уровень 2.3<br>");
echo ("задача 1<br>");
$slovo1 = "хлеb";
$slovo2 = "bоров";
if ($slovo1[-1] == $slovo2[0]){
    echo "совпадают<br>";
};


echo ("задача 2<br>");
$stroka = "saa0sas0bil0ish0";
$c = 0;
for ($i = 0; $i < strlen($stroka); $i++) {
    if ($stroka[$i] === '0') {
        $c++;
        if ($c === 3) {
            echo "Позиция третьего нуля $i<br>";
            break;
        };
    };
};


echo ("задача 3<br>");
$str = '12,34,56';
$num = explode(',', $str);
$sum = 0;
foreach ($num as $n) {
    $sum += (int)$n;
};
echo "Сумма: $sum<br>";


echo ("задача 4<br>");
$data = '2025-12-31';
$pilula = explode('-', $data);
$r = [
    'year'  => $pilula[0],
    'month' => $pilula[1],
    'day'   => $pilula[2]
];

print_r($r);
echo ("<br><br><br>");
?>


<?php
echo ("уровень 2.4<br>");
echo ("задача 1<br>");
$str = 'abcdd123def';
$l = strlen($str);
$poz = -1;
for ($i = 0; $i < $l; $i++) {
    if (is_numeric($str[$i])) {
        $poz = $i;
        break;
    }
}
echo $poz.  "<br>";


echo ("задача 2<br>");
$obj = ['имя' => 'Расим','возраст' => 18,'город' => 'Уфа'
];
$k = array_keys($obj);
$v = array_values($obj);
print_r($k);
print_r($v);
echo "<br>";


echo ("задача 3<br>");
$num = 1234567890;
$str = (string)$num;
$colvo = 0;
for ($i = 0; $i < strlen($str); $i++) {
    $sas = (int)$str[$i];
    if ($sas % 2 == 0) {
        $colvo++;
    }
}
echo $colvo;
echo "<br>";


echo ("задача 4<br>");
$str = 'abdepachgcf';
$r = '';
for ($i = 0; $i < strlen($str); $i++) {
    if (($i + 1) % 2 == 1) {
        $r .= strtoupper($str[$i]);
    } else {
        $r .= $str[$i];
    };
};
echo $r;
echo "<br>";

echo ("задача 5<br>");
$str = 'aaa bbb ccc';
$r = ucwords($str);
echo $r;
echo "<br><br><br>";
?>



<?php
echo ("уровень 2.5<br>");
echo ("задача 1<br>");
$str = '023m0df0dfg0';
$poz = [];
for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == '0') {
        $poz[] = $i;
    };
};
print_r($poz);
echo "<br>";


echo ("задача 2<br>");
$str = 'abcdefg';
$r = '';
for ($i = 0; $i < strlen($str); $i++) {
    if (($i + 1) % 3 != 0) {
        $r .= $str[$i];
    };
};
echo $r;
echo "<br>";


echo ("задача 3<br>");
$arr = [1, 2, 3, 4, 5, 6];
$sumhi = 0;
$sumnehi = 0;
foreach ($arr as $i => $v) {
    if ($i % 2 == 0) {
        $sumhi += $v;
    } else {
        $sumnehi += $v;
    };
};
echo $sumhi / $sumnehi;
?>