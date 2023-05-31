<?php
// Vérifier si le formulaire de déconnexion a été soumis
if(isset($_POST['deco'])){
    // Supprimer le cookie en le mettant à une date passée
    setcookie('prenom', '', time() - 3600);
}

// Vérifier si le formulaire de connexion a été soumis
if(isset($_POST['connexion'])){
    $prenom = $_POST['prenom'];

    // Stocker le prénom dans un cookie
    setcookie('prenom', $prenom, time() + 3600); // Expire dans 1 heure
}

// Vérifier si le prénom est présent dans le cookie
if(isset($_COOKIE['prenom'])){
    $prenom = $_COOKIE['prenom'];
    echo "Bonjour $prenom !";
    echo '<br>';
    echo '<form method="POST" action="">';
    echo '<input type="submit" name="deco" value="Déconnexion">';
    echo '</form>';
} else {
    echo '<form method="POST" action="">';
    echo '<label for="prenom">Prénom :</label>';
    echo '<input type="text" name="prenom" id="prenom" required>';
    echo '<br>';
    echo '<input type="submit" name="connexion" value="Connexion">';
    echo '</form>';
}
?>
