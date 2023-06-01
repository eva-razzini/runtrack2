<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=jour08;charset=utf8', 'pma', 'plomkiplomki');

$requet = $bdd->prepare("SELECT * FROM etudiants WHERE sexe = 'Femme'");
$requet->execute();
$users = $requet->fetchAll();

//Ici je récuprère tous les éléments de ma table
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Prénom</th>";
echo "<th>Nom</th>";
echo "<th>Naissance</th>";
echo "</thead>";
echo "<tbody>";

foreach ($users as $key => $user) {
    echo '<td>' . $user['prenom'] . '</td>';
    echo '<td>' . $user['nom'] . '</td>';
    echo '<td>' . $user['naissance'] . '</td>';
    echo '</tr>';

}
echo '</tbody>';
echo '</table>';
?>