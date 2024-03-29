<h1>Les réservations</h1>
<?php

require_once "../includes/db.php";

// ECHO "<PRE>";
// print_r($_POST);
// echo "</PRE>";

// // Affichage des valeurs postées
// echo $_POST['firstname'] . "<br>";
// echo $_POST['lastname'] . "<br>";
// echo $_POST['age'] . "<br>";
// echo $_POST['phone'] . "<br>";
// echo $_POST['email'] . "<br>";
// echo $_POST['date'] . "<br>";
// echo $_POST['heure'] . "<br>";
// echo $_POST['typedecours'] . "<br>";
// echo $_POST['genre'] . "<br>";
// die();

// Requête SQL préparée
$query = $bdd->prepare("
    UPDATE reservation 
    SET 
    name = :name,
    firstname = :firstname,
    age = :age,
    phone = :phone,
    email = :email,
    date = :date,
    bookingtime = :bookingtime,
    sportsclasses = :sportsclasses,
    gender = :gender
    WHERE id=:id
");

// Exécution de la requête avec les valeurs fournies via $_POST
$query->execute([
    "name" => $_POST["lastname"],
    "firstname" => $_POST["firstname"],
    "age" => $_POST["age"],
    "phone" => $_POST["phone"],
    "email" => $_POST["email"],
    "date" => $_POST["date"],
    "bookingtime" => $_POST["heure"], 
    "sportsclasses" => $_POST["typedecours"],
    "gender" => $_POST["genre"],
    "id"=>$_GET['id']
]);


header("Location: /cours/index.php?success=updated");
