<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i >= 0 && $i <= 20) {
        // condition affiche en italique de 0 à 20 et fait un retour a la ligne
        echo "<i>$i</i><br />";
    } elseif ($i == 42) {
        // condition affiche la plateforme si = à 42 et fait un retour a la ligne
        echo"La Plateforme_<br />";        
    } elseif ($i >= 25 && $i <= 50) {
        // condition souliguer de 25 à 50 et fait un retour a la ligne
        echo "<u>$i</u><br />";
    } else {
        // sinon affiche le nombre et retour a la ligne
        echo "$i<br />";
    }
}
?>