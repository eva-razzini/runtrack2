<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        // affiche FizzBuzz si le nombre est multiple de 3 et de 5 et fait un retour a la ligne
        echo "FizzBuzz<br />";
    } elseif ($i % 3 == 0) {
        // affiche Fizz si le nombre est multiple de 3 et fait un retour a la ligne
        echo "Fizz<br />";
    } elseif ($i % 5 == 0) {
        // affiche Buzz si le nombre est multiple de 5 et fait un retour a la ligne
        echo "Buzz<br />";
    } else {
        // sinon affiche le nombre et fait un retour a la ligne
        echo "$i<br />";
    }
}
?>