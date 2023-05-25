<?php
// Vérifier si des données ont été envoyées via la méthode POST
if (!empty($_POST)) {
    echo '<table>';
    echo '<tr><th>Argument</th><th>Valeur</th></tr>';

    // Parcourir chaque argument et sa valeur dans $_POST
    foreach ($_POST as $argument => $valeur) {
        // Échapper les caractères spéciaux pour éviter les failles XSS
        $argument = htmlspecialchars($argument, ENT_QUOTES, 'UTF-8');
        $valeur = htmlspecialchars($valeur, ENT_QUOTES, 'UTF-8');

        // Afficher une ligne du tableau pour chaque argument et valeur
        echo '<tr><td>' . $argument . '</td><td>' . $valeur . '</td></tr>';
    }

    echo '</table>';
}
?>

<!-- Formulaire de test -->
<form method="POST" action="">
    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" id="prenom" required>

    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" required>

    <input type="submit" value="Envoyer">
</form>
