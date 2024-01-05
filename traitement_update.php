<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$id = $_POST["hide"];

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$ville = $_POST["ville"];

$connex = mysqli_connect('localhost', 'root','','librairie');

$req = "UPDATE `user` SET `nom` = '$nom', `prenom` = '$prenom', `ville` = '$ville' WHERE id = '$id'";
$result = mysqli_query($connex, $req);

echo "L'utilisateur a bien été modifié";


?>

<a href="connexionLibrairie.php"><button>Accueil</button></a>

</body>
</html>
