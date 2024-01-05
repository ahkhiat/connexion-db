<?php

$connex = mysqli_connect('localhost', 'root','','librairie');

$id = $_GET["id"];

$req = "DELETE FROM user WHERE id = '$id'";



$result = mysqli_query($connex, $req);

header('Location: connexionLibrairie.php');
