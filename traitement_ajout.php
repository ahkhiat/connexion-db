<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$ville = $_POST["ville"];

$connex = mysqli_connect('localhost', 'root','','librairie');

$req = "INSERT INTO `user` (`id`, `nom`, `prenom`, `ville`) VALUES (NULL, '$nom', '$prenom', '$ville');";
$result = mysqli_query($connex, $req);

echo "L'utilisateur a bien été ajouté";


?>

<a href="connexionLibrairie.php"><button>Accueil</button></a>

</body>
</html>

