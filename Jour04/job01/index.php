<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <input type="text" placeholder="nom" name="Nom">
        <input type="submit" value="envoyer">
    </form>

    <?php
        $arguement = count($_GET);
        echo "Le nombre d’arguments GET envoyé est : $arguement ";
    ?>
</body>
</html>