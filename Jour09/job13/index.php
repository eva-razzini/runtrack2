<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=jour08;charset=utf8', 'pma', 'plomkiplomki');

$requet = $bdd->prepare("SELECT salles.nom AS nom_salle, etage.nom AS nom_etage FROM salles JOIN etage ON salles.id_etage = etage.id");
$requet->execute();
$users = $requet->fetchAll();

//Ici je récuprère tous les éléments de ma table
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Nom des salles</th>";
echo "<th>Nom des étages</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($users as $key => $user) {
    echo '<td>' . $user['nom_salle'] . '</td>';
    echo '<td>' . $user['nom_etage'] . '</td>';
    echo '</tr>';

}
echo '</tbody>';
echo '</table>';
?>