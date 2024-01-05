<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    
    $requete="SELECT * FROM Users";
    $result = mysqli_query($connex, $requete);
    // $nb = mysqli_num_rows($result);
    // echo 'Il y a ' . $nb . ' Utilisateurs(s).';

    $nb = mysqli_num_rows($result);
    echo 'Il y a '.$nb . ' utilisateur(s).';
    
    if(!$result){
        echo "<h2> Lecture impossible </h2>";

    }else{
        echo "<h1> Liste des utilisateurs </h1>";
        echo "<TABLE border=2 width=50%> <TR> <TH> Nom </TH> <TH> Prenom </TH> <TH> Ville </TH>";
        while ($donnees = mysqli_fetch_assoc($result)){
            echo "<TR>";
            echo "<TD>".$donnees['nom']. "</TD>";
            echo "<TD>".$donnees['prenom']. "</TD>";
            echo "<TD>".$donnees['ville']. "</TD>";
        }
        echo "</TABLE>";
    }
    
    mysqli_close($connex);
}




?>

</body>
</html>