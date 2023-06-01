<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=jour08;charset=utf8', 'pma', 'plomkiplomki');

$requet = $bdd->prepare("SELECT COUNT(*) as nb_etudiants FROM etudiants");
$requet->execute();
$users = $requet->fetchAll();

//Ici je récuprère tous les éléments de ma table
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Nombre d\'étudiants</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($users as $key => $user) {
    echo '<td>' . $user['nb_etudiants'] .  '</td>';
    echo '</tr>';

}
echo '</tbody>';
echo '</table>';
?>