<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs du formulaire
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Vérifier les identifiants
    if ($username === 'John' && $password === 'Rambo') {
        echo "C'est pas ma guerre";
    } else {
        echo 'Votre pire cauchemar';
    }
}
?>

<!-- Formulaire de connexion -->
<form method="POST" action="">
    <label for="username">Nom d'utilisateur:</label>
    <input type="text" name="username" id="username" required>

    <label for="password">Mot de passe:</label>
    <input type="password" name="password" id="password" required>

    <input type="submit" value="Se connecter">
</form>
