<?php
// Vérifier si des données ont été envoyées via la méthode POST
if (!empty($_POST)) {
    $nombreArguments = count($_POST);
    echo "Le nombre d'arguments POST envoyé est : " . $nombreArguments;
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
