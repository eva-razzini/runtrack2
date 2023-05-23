<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$length = strlen($str);
$newStr = '';

for ($i = 0; $i < $length; $i++) {
    $currentChar = $str[$i];
    $nextChar = $str[($i + 1) % $length];
    
    $newStr .= $nextChar;
}

echo $newStr;
?>