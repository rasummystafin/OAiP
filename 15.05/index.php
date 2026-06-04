<?php
function izmenenie($str) {
    $result = '';
    $length = strlen($str);
    
    for ($i = 0; $i < $length; $i++) {
        $char = $str[$i];
        
        if (ctype_upper($char)) {
            $result .= strtolower($char);
        } elseif (ctype_lower($char)) {
            $result .= strtoupper($char);
        } else {
            $result .= $char;
        }
    }
    
    return $result;
}

echo izmenenie("hello world") . "<br>";
echo izmenenie("HELLO WORLD") . "<br>";
echo izmenenie("HeLLO WoRLD") . "<br>";
echo izmenenie("12345") . "<br>";
echo izmenenie("1a2b3c4d5e") . "<br>";



function Poiskpropusk($array) {
    $alfavit = range('a', 'z');

    $verx = ctype_upper($array[0]);
    $alfavit = $verx ? range('A', 'Z') : range('a', 'z');
    
    $start = array_search($array[0], $alfavit);
    
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] != $alfavit[$start + $i]) {
            return $alfavit[$start + $i];
        }
    }
    
    return '';
}

echo Poiskpropusk(['a','b','c','d','f']) . "<br>";
echo Poiskpropusk(['o','q','r','s']) . "<br>";
echo Poiskpropusk(['p','q','r','t']) . "<br>";
echo Poiskpropusk(['x','z']) . "<br>";



function max_rot($n) {
    $str = (string)$n;
    $number = [$n];
    $curva = $str;
    
    for ($i = 0; $i < strlen($str) - 1; $i++) {
        $left = substr($curva, 0, $i);
        $right = substr($curva, $i);
        
        if (strlen($right) > 1) {
            $rotated = substr($right, 1) . $right[0];
            $curva = $left . $rotated;
            $number[] = (int)$curva;
        }
    }
    
    return max($number);
}

echo max_rot(56789) . "<br>";
echo max_rot(38458215) . "<br>";
?>