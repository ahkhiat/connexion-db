<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>

<?php

$connex = mysqli_connect('localhost', 'root','','librairie', '3307');

$idLivre = $_GET["idLivre"];

$req = "SELECT * FROM livre WHERE idLivre = '$idLivre'";

$result = mysqli_query($connex, $req);
$donnees = mysqli_fetch_assoc($result);


?>
<div class="mx-auto w-50">
<h1 class="mt-3">Modification de l'utilisateur</h1>

<form class= "mt-5" action="traitement_update.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Titre</label>
    <input type="text" name="titre" class="form-control" id="nom" aria-describedby="nom" value="<?php echo $donnees["titre_livre"] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nom auteur</label>
    <input type="text" name="nom" class="form-control" id="nom" aria-describedby="nom" value="<?php echo $donnees["titre_livre"] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Prénom auteur</label>
    <input type="text" name="nom" class="form-control" id="nom" aria-describedby="nom" value="<?php echo $donnees["titre_livre"] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Thème</label>
    <input type="text" name="nom" class="form-control" id="nom" aria-describedby="nom" value="<?php echo $donnees["titre_livre"] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nbe pages</label>
    <input type="text" name="prenom" class="form-control" id="prenom" aria-describedby="prenom" value="<?php echo $donnees["prenom"] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Format</label>
    <input type="text" name="nom" class="form-control" id="nom" aria-describedby="nom" value="<?php echo $donnees["titre_livre"] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Editeur</label>
    <input type="text" name="nom" class="form-control" id="nom" aria-describedby="nom" value="<?php echo $donnees["titre_livre"] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Année édition</label>
    <input type="text" name="nom" class="form-control" id="nom" aria-describedby="nom" value="<?php echo $donnees["titre_livre"] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Prix</label>
    <input type="text" name="nom" class="form-control" id="nom" aria-describedby="nom" value="<?php echo $donnees["titre_livre"] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ville</label>
    <input type="text" name="ville" class="form-control" id="ville" value="<?php echo $donnees["ville"] ?>">
    <input type="hidden" name="hide" class="form-control" id="hide" value="<?php echo $donnees["id"] ?>">

  </div>
  
  <button type="submit" class="mt-3 btn btn-primary">Submit</button>
</form>
</div>

    
</body>
</html>