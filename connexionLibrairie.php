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
    
<script type="text/javascript">
    function confirmation() {
      return confirm("Supprimer l'utilisateur ?");
    }
</script>

<div class="mx-auto w-75">

<?php

require_once 'dbConnect.php';
    
    $requete="SELECT * FROM user";
    $sth = $dbh->query($requete);
    $rows = $sth->fetchAll();    


    echo 'Il y a '.count($rows) . ' utilisateur(s).';
    
    
    echo "<div class='mt-5'>";
    echo "<h1> Liste des utilisateurs </h1>";
    echo "<TABLE border=2 width=100% class='mt-4'> <TR> <TH> id </TH><TH> Nom </TH> <TH> Prenom </TH> <TH> Ville </TH> <TH> Action </TH>";
        foreach ($rows as $row){
            echo "<TR border=1>";
            echo "<TD>".$row['id']. "</TD>";
            echo "<TD>".$row['nom']. "</TD>";
            echo "<TD>".$row['prenom']. "</TD>";
            echo "<TD>".$row['ville']. "</TD>";
            echo '<TD><a href="updateUtilisateur.php?id='.$row["id"].'" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a></TD>';
            echo '<TD><a onclick="return confirmation()" href="deleteUtilisateur.php?id='.$row["id"].'" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a></TD>';

        }
    echo "</TABLE></div>";
        
    
    


?>

    <div>
        
        <a class="mt-3 btn btn-secondary" href="ajoutUtilisateur.php" >Create new user</a>

    </div>
</div>



</body>
</html>