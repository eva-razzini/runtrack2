<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Récupérer la valeur du champ "nombre" s'il est présent
    $nombre = $_GET['nombre'] ?? '';

    // Vérifier si la valeur est un nombre
    if (is_numeric($nombre)) {
        // Vérifier si le nombre est pair ou impair
        if ($nombre % 2 === 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    } else {
        echo "Veuillez entrer un nombre valide";
    }
}
?>

<!-- Formulaire -->
<form method="GET" action="">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>

    <input type="submit" value="Valider">
</form>
