<!DOCTYPE html>
<html>
<head>
    <title>Tableau des variables</title>
</head>
<body>
    <?php
        // Variables de différents types
        $booleanVar = true;
        $integerVar = 42;
        $stringVar = "Hello";
        $floatVar = 3.14;

        // Tableau HTML
        echo "<table>";
        echo "<thead><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thead>";
        echo "<tbody>";
        
        // Ligne pour la variable booleanVar
        echo "<tr><td>Boolean</td><td>booleanVar</td><td>" . var_export($booleanVar, true) . "</td></tr>";

        // Ligne pour la variable integerVar
        echo "<tr><td>Integer</td><td>integerVar</td><td>" . $integerVar . "</td></tr>";

        // Ligne pour la variable stringVar
        echo "<tr><td>String</td><td>stringVar</td><td>" . $stringVar . "</td></tr>";

        // Ligne pour la variable floatVar
        echo "<tr><td>Float</td><td>floatVar</td><td>" . $floatVar . "</td></tr>";

        echo "</tbody>";
        echo "</table>";
    ?>
</body>
</html>
