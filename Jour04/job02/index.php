<?php
// Vérifier si des données ont été envoyées via la méthode GET
if (!empty($_GET)) {
    echo '<table>';
    echo '<tr><th>Argument</th><th>Valeur</th></tr>';

    // Parcourir chaque argument et sa valeur dans $_GET
    foreach ($_GET as $argument => $valeur) {
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
<form method="GET" action="">
    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" id="prenom" required>

    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" required>

    <input type="submit" value="Envoyer">
</form>
