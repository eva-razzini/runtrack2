<?php
for ($i = 0; $i <= 1337; $i++) {
    if ($i == 42) {
        //condition pour 42 affiche en gras et fait un retour a la ligne
        echo "<b><u>$i</u></b><br />";
    } else {
        // affiche le nombre et fait un retour a la ligne
        echo "$i<br />";
    }
}
?>