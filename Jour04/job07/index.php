<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs du formulaire
    $largeur = $_POST['largeur'] ?? 0;
    $hauteur = $_POST['hauteur'] ?? 0;

    // Vérifier si les valeurs sont des nombres positifs
    if (is_numeric($largeur) && is_numeric($hauteur) && $largeur > 0 && $hauteur > 0) {
        // Afficher la maison en fonction des valeurs de largeur et de hauteur
        afficherMaison($largeur, $hauteur);
    } else {
        echo "Veuillez entrer des valeurs numériques positives pour la largeur et la hauteur.";
    }
}

// Fonction pour afficher la maison
function afficherMaison($largeur, $hauteur) {
    echo '<pre>';


    // Dessiner la pointe du toit
    echo str_repeat(' ', $hauteur);
    echo '^';
    echo PHP_EOL;

    // Dessiner les côtés du toit
    for ($i = 1; $i <= $hauteur; $i++) {
        echo str_repeat(' ', $hauteur - $i);
        echo '/';
        echo str_repeat('_', $i * 2 - 1);
        echo '\\';
        echo PHP_EOL;
    }

    // Dessiner les murs
    for ($i = 1; $i <= $hauteur; $i++) {
        echo str_repeat('|', 1);
        echo str_repeat(' ', $hauteur * 2 - 1);
        echo str_repeat('|', 1);
        echo PHP_EOL;
    }

    // Dessiner le sol
    echo str_repeat(' ', 1);
    echo str_repeat('_', $hauteur * 2 - 1);

    echo '</pre>';
}
?>

<!-- Formulaire -->
<form method="POST" action="">
    <label for="largeur">Largeur:</label>
    <input type="text" name="largeur" id="largeur" required>

    <label for="hauteur">Hauteur:</label>
    <input type="text" name="hauteur" id="hauteur" required>

    <input type="submit" value="Afficher la maison">
</form>
