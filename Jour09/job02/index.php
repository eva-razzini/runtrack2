<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=jour08;charset=utf8', 'pma', 'plomkiplomki');

$requet = $bdd->prepare('SELECT * FROM salles');
$requet->execute();
$users = $requet->fetchAll();

//Ici je récuprère tous les éléments de ma table
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Nom</th>";
echo "<th>capacite</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($users as $key => $user) {
    echo '<tr>';
    echo '<td>' . $user['nom'] . '</td>';
    echo '<td>' . $user['capacite'] . '</td>';
    echo '</tr>';

}
echo '</tbody>';
echo '</table>';
?>