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


?>
<div class="mx-auto w-50">
  <h1 class="mt-3">Ajout d'un nouvel utilisateur</h1>
<form class= "mt-5" action="traitement_ajout.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" name="nom" class="form-control" id="nom" aria-describedby="nom" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Prenom</label>
    <input type="text" name="prenom" class="form-control" id="prenom" aria-describedby="prenom" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ville</label>
    <input type="text" name="ville" class="form-control" id="ville" placeholder="">
  </div>
  
  <button type="submit" class="mt-3 btn btn-primary">Submit</button>
</form>
</div>

    
</body>
</html>