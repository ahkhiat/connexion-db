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
if (!$connex) {
    echo "<script type=text/javascript>";
    echo "alert('La connexion à la base de données a echoué')</script>";
} else {
    echo "<script type=text/javascript>";
    echo "alert('La connexion à la base de données a reussi')</script>";
    
    $requete="SELECT * FROM user";
    $result = mysqli_query($connex, $requete);
    // $nb = mysqli_num_rows($result);
    // echo 'Il y a ' . $nb . ' Utilisateurs(s).';

    $donnees = mysqli_fetch_assoc($result);

    $nb = mysqli_num_rows($result);

    echo 'Il y a '.$nb . ' utilisateur(s).';
    
    if(!$result){
        echo "<h2> Lecture impossible </h2>";

    }else{
        echo "<h1> Liste des utilisateurs </h1>";
        echo "<TABLE  border=2 width=50%> <TR> <TH> id </TH><TH> Nom </TH> <TH> Prenom </TH> <TH> Ville </TH> <TH> Action </TH>";
        while ($donnees = mysqli_fetch_assoc($result)){
            echo "<TR>";
            echo "<TD>".$donnees['id']. "</TD>";
            echo "<TD>".$donnees['nom']. "</TD>";
            echo "<TD>".$donnees['prenom']. "</TD>";
            echo "<TD>".$donnees['ville']. "</TD>";
            echo '<TD><a href="updateUtilisateur.php?id='.$donnees["id"].'"><button>Modifier</button></a></TD>';
            
        }
        echo "</TABLE>";
        
    }
    
    mysqli_close($connex);
}

?>

<div>
<button type="button">
<a href="ajoutUtilisateur.php" class="btn btn-outline-success">Create new user</a></button>

</div>



</body>
</html>