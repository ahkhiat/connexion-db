<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <title>Document</title>
</head>
<body>
    
<?php

require_once 'dbConnect.php';

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$ville = $_POST["ville"];

$requete = "INSERT INTO `user` (`id`, `nom`, `prenom`, `ville`) VALUES (NULL, '$nom', '$prenom', '$ville');";
$sth = $dbh->prepare($requete);
$sth->execute();

?>

<div class="text-center mt-5">
    <h2>L'utilisateur a bien été ajouté</h2>
    <a class="mt-3 btn btn-secondary" href="connexionLibrairie.php">Accueil</a>
</div>

</body>
</html>

