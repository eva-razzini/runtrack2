<?php
function bonjour($jour) {
    if ($jour === true) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Appel de la fonction bonjour() avec différentes valeurs pour le paramètre $jour
bonjour(true); // Affiche "Bonjour"
bonjour(false); // Affiche "Bonsoir"
?>
