
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<script>

let confirmation = confirm("Supprimer l'utilisateur?");
if (confirmation) {
    //Logic to delete the item



    <?php

$connex = mysqli_connect('localhost', 'root','','librairie', '3307');

$id = $_GET["id"];

$req = "DELETE FROM user WHERE id = '$id'";



$result = mysqli_query($connex, $req);

header('Location: connexionLibrairie.php');

?>

}

</script>

</body>
</html>


