<?php
echo "2<br />"; // 2 est le premier nombre premier on l'affiche

for ($number = 3; $number <= 1000; $number += 2) {
    $isPrime = true;
    // inisallisation de la boucle de 3 à 1 000 et allant de 2 en 2
    
    for ($divisor = 3; $divisor * $divisor <= $number; $divisor += 2) {
        // inisallisation du diviseur a 3 puis diviseur au carrer es plus petit ou égal au nombre en cour
        // diviseur est augumenté de 2 en 2
        if ($number % $divisor == 0) {
            // si le modulo de la division du nombre égal 0 se n'est pas un nombre premier
            $isPrime = false;
            break;
        }
    }
    // sinon affiche le nombre et fait un retour à la ligne
    if ($isPrime) {
        echo $number . "<br />";
    }
}
?>