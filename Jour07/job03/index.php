<?php
session_start();

// Vérifier si le formulaire a été soumis
if(isset($_POST['prenom'])){
    $prenom = $_POST['prenom'];
    
    // Ajouter le prénom à la variable de session
    if(isset($_SESSION['prenoms'])){
        $_SESSION['prenoms'][] = $prenom;
    } else {
        $_SESSION['prenoms'] = array($prenom);
    }
}

// Réinitialiser la liste des prénoms
if(isset($_POST['reset'])){
    unset($_SESSION['prenoms']);
}

// Afficher les prénoms enregistrés
if(isset($_SESSION['prenoms'])){
    foreach($_SESSION['prenoms'] as $prenom){
        echo $prenom . '<br>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire PHP</title>
</head>
<body>
    <form method="POST" action="">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required>
        <br>
        <input type="submit" value="Valider">
        <input type="submit" name="reset" value="Réinitialiser">
    </form>
</body>
</html>
