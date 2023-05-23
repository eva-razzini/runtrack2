<?php
// liste de nombres
$numbers = array(200, 204, 173, 98, 171, 404, 459);

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        // si le résulta du nombre mudulo de 2 égale 0 affiche le nombre est paire
        echo "$number est paire<br />";
    } else {
        // sinon affiche impaire
        echo "$number est impaire<br />";
    }
}
?>