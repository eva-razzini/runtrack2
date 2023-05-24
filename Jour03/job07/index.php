<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$length = 0;
while (isset($str[$length])) {
    $length++;
}

$newStr = '';

for ($i = 0; $i < $length; $i++) {
    $currentChar = $str[$i];
    $nextChar = $str[($i + 1) % $length];
    
    $newStr .= $nextChar;
}

echo $newStr;
?>