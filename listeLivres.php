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

$connex = mysqli_connect('localhost', 'root','','librairie', '3307');
if (!$connex) {
    echo "La connexion à la base de données a echoué" . "<br>";
} else {
    echo "La connexion à la base de données a reussi" . "<br>";
    
    $requete="SELECT * FROM livre";
    $result = mysqli_query($connex, $requete);
    

    $nb = mysqli_num_rows($result);

    echo 'Il y a '.$nb . ' utilisateur(s).';
    
    if(!$result){
        echo "<h2> Lecture impossible </h2>";

    }else{
        echo "<div class='mt-5'>";
        echo "<h1> Liste des livres </h1>";
        echo "<TABLE border=2 width=100% class='mt-4'> <TR> <TH> Titre </TH><TH> Auteur </TH> <TH> Thème </TH> <TH> Prix </TH> <TH> Nbe pages </TH>";
        while ($donnees = mysqli_fetch_assoc($result)){
            echo "<TR border=1>";
            echo "<TD>".$donnees['titre_livre']. "</TD>";
            echo "<TD>".$donnees['prenom_auteur']. "&nbsp" .$donnees['nom_auteur'].  "</TD>";
            echo "<TD>".$donnees['theme_livre']. "</TD>";
            echo "<TD>".$donnees['prix_vente']. "</TD>";
            echo '<TD><a href="updateLivre.php?idLivre='.$donnees["idLivre"].'" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a></TD>';
            echo '<TD><a onclick="return confirmation()" href="deleteLivre.php?idLivre='.$donnees["idLivre"].'" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a></TD>';

        }
        echo "</TABLE></div>";
        
    }
    
    mysqli_close($connex);
}

?>

    <div>
        
        <a class="mt-3 btn btn-secondary" href="ajoutUtilisateur.php" >Create new user</a>

    </div>
</div>



</body>
</html>