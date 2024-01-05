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

$connex = mysqli_connect('localhost', 'root','','librairie');

$id = $_GET["id"];

$req = "SELECT * FROM user WHERE id = '$id'";

$result = mysqli_query($connex, $req);
$donnees = mysqli_fetch_assoc($result);


?>
<div class="mx-auto">
<form class= "w-50" action="traitement_update.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" name="nom" class="form-control" id="nom" aria-describedby="nom" value="<?php echo $donnees["nom"] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Prenom</label>
    <input type="text" name="prenom" class="form-control" id="prenom" aria-describedby="prenom" value="<?php echo $donnees["prenom"] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ville</label>
    <input type="text" name="ville" class="form-control" id="ville" value="<?php echo $donnees["ville"] ?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

    
</body>
</html>