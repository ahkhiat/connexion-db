<?php
$user = "root";
$pass = "";

try {

    $dbh = new PDO('mysql:host=localhost:3307;dbname=librairie', $user, $pass);
    
    return $dbh;

} catch (PDOException $e) {
    die("erreur : " .$e->getMessage());
}

