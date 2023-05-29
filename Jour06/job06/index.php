<?php
function leetSpeak($str) {
    $leetMapping = array(
        'A' => '4',
        'B' => '8',
        'E' => '3',
        'G' => '6',
        'L' => '1',
        'S' => '5',
        'T' => '7',
        'a' => '4',
        'b' => '8',
        'e' => '3',
        'g' => '6',
        'l' => '1',
        's' => '5',
        't' => '7'
    );

    $result = '';

    $length = 0;
    while (isset($str[$length])) {
        $length++;
    }

    for ($i = 0; $i < $length; $i++) {
        $char = $str[$i];
        if (array_key_exists($char, $leetMapping)) {
            $result .= $leetMapping[$char];
        } else {
            $result .= $char;
        }
    }

    return $result;
}

// Exemple d'utilisation de la fonction leetSpeak()
$string = "leet speak";
$result = leetSpeak($string);
echo $result;
?>
