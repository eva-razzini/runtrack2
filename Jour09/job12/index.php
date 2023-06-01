<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=jour08;charset=utf8', 'pma', 'plomkiplomki');

$requet = $bdd->prepare("SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'");
$requet->execute();
$users = $requet->fetchAll();

//Ici je récuprère tous les éléments de ma table
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Prénom</th>";
echo "<th>Nom</th>";
echo "<th>Naissance</th>";
echo "</tr>";
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