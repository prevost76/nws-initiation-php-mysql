<?php

//Récuperer la connexion à la bdd
require_once "../includes/db.php";

//Query to delete a reservation 
$query = $bdd->prepare("DELETE FROM reservation WHERE id=:id");

//Execute the query
$query->execute([
    "id" => $_GET['id']
]);

//Rediriger l'utilisateur
header("Location: /cours/index.php?success=delete");

exit(); 
?>