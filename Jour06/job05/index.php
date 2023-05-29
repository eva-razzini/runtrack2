<?php
function occurrences($str, $char) {
    $count = 0;
    $length = 0;
    
    // Calculer la longueur de la chaîne manuellement
    while (isset($str[$length])) {
        $length++;
    }
    
    for ($i = 0; $i < $length; $i++) {
        if ($str[$i] === $char) {
            $count++;
        }
    }
    
    return $count;
}

// Exemple d'utilisation de la fonction occurrences()
$string = "Bonjour";
$character = "o";
$result = occurrences($string, $character);
echo "Le nombre d'occurrences de '".$character."' dans '".$string."' est : ".$result;
?>
