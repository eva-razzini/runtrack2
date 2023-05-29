<?php
function calcule($nombre1, $operation, $nombre2) {
    if ($operation === '+') {
        return $nombre1 + $nombre2;
    } elseif ($operation === '-') {
        return $nombre1 - $nombre2;
    } elseif ($operation === '*') {
        return $nombre1 * $nombre2;
    } elseif ($operation === '/') {
        if ($nombre2 != 0) {
            return $nombre1 / $nombre2;
        } else {
            return "Erreur : division par zéro";
        }
    } elseif ($operation === '%') {
        return $nombre1 % $nombre2;
    } else {
        return "Erreur : opération non valide";
    }
}

// Appel de la fonction calcule() avec différents paramètres et affichage du résultat
$resultat1 = calcule(5, '+', 3); // Addition : 5 + 3 = 8
echo $resultat1 . "<br>";

$resultat2 = calcule(10, '-', 7); // Soustraction : 10 - 7 = 3
echo $resultat2 . "<br>";

$resultat3 = calcule(4, '*', 6); // Multiplication : 4 * 6 = 24
echo $resultat3 . "<br>";

$resultat4 = calcule(15, '/', 5); // Division : 15 / 5 = 3
echo $resultat4 . "<br>";

$resultat5 = calcule(12, '%', 5); // Modulo : 12 % 5 = 2
echo $resultat5 . "<br>";
?>
