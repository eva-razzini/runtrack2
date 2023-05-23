<?php
$str = "Les choses que l'on possède finissent par nous posséder.";

$reversedStr = '';

for ($i = mb_strlen($str, 'UTF-8') - 1; $i >= 0; $i--) {
    $reversedStr .= mb_substr($str, $i, 1, 'UTF-8');
}

header('Content-Type: text/html; charset=UTF-8');
echo $reversedStr;
?>