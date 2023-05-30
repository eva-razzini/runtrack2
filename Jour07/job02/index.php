<?php
// Vérifier si le cookie "nbvisites" existe
if (!isset($_COOKIE['nbvisites'])) {
    // Initialiser le cookie à 0 si il n'existe pas
    setcookie('nbvisites', 0, time() + 86400); // 86400 secondes = 1 jour
}

// Incrémenter le compteur de visites à chaque chargement de la page
if (isset($_COOKIE['nbvisites'])) {
    $nbVisites = $_COOKIE['nbvisites'] + 1;
    setcookie('nbvisites', $nbVisites, time() + 86400);
}

// Vérifier si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialiser le cookie à 0
    setcookie('nbvisites', 0, time() + 86400);
    $nbVisites = 0;
}

// Récupérer la valeur actuelle du cookie "nbvisites"
if (isset($_COOKIE['nbvisites'])) {
    $nbVisites = $_COOKIE['nbvisites'];
} else {
    $nbVisites = 0;
}

// Afficher le contenu du cookie "nbvisites"
echo "Nombre de visites : " . $nbVisites;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compteur de visites</title>
</head>
<body>
    <form method="POST" action="">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>
