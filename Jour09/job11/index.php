<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=jour08;charset=utf8', 'pma', 'plomkiplomki');

$requet = $bdd->prepare("SELECT AVG(capacite) as capacite_moyenne FROM salles");
$requet->execute();
$users = $requet->fetchAll();

//Ici je récuprère tous les éléments de ma table
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Capacité moyenne des salles</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($users as $key => $user) {
    echo '<td>' . $user['capacite_moyenne'] . '</td>';
    echo '</tr>';

}
echo '</tbody>';
echo '</table>';
?>