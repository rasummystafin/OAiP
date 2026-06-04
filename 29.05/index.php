<?php
function UMPKtest($word, $chast1, $chast2) {

    $combo = $chast1 . $chast2;
    for ($i = 0; $i < strlen($word); $i++) {
        $char = $word[$i];
        if (strpos($combo, $char) === false) {
            return false;
        }
        $pos = strpos($combo, $char);
        if ($pos !== false) {
            $combo = substr($combo, 0, $pos) . substr($combo, $pos + 1);
}}
    return true;
}

$Umpk = "umpk";

$otrezok1 = "um";
$otrezok2 = "pk";
echo "$Umpk - '$otrezok1', '$otrezok2' => " . (UMPKtest($Umpk, $otrezok1, $otrezok2) ? 'true' : 'false') . "<br>";

$otrezok1 = "u";
$otrezok2 = "pkm";
echo "$Umpk - '$otrezok1', '$otrezok2' => " . (UMPKtest($Umpk, $otrezok1, $otrezok2) ? 'true' : 'false') . "<br>";

$otrezok1 = "ym";
$otrezok2 = "pk";
echo "$Umpk - '$otrezok1', '$otrezok2' => " . (UMPKtest($Umpk, $otrezok1, $otrezok2) ? 'true' : 'false') . "<br>";
?>