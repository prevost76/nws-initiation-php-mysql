<?php
include "../partials/header.php"; 

require_once "../includes/db.php";

$query = $bdd->query("SELECT * FROM reservation ORDER BY id DESC");
$reservation = $query->fetchALL(PDO::FETCH_OBJ);

if (isset($_GET['success'])) {
    $message_type = "success";
    if ($_GET['success'] === "created") {
        $message = "La question a été ajoutée avec succès.";

    }

    if ($_GET['success'] === "delete") {
        $message = "la question a été supprimer avec succès";

    }

    if ($_GET['success'] ==="update") {
        $message = "La question a été modifier avec succès";
    }
}

?>


<table class="container">
    
       <th>name</th>
       <th>firstname</th> 
       <th>age</th> 
       <th>phone</th>
       <th>email</th>
       <th>date</th>
       <th>bookingtime</th> 
       <th>sportsclasses</th> 
       <th>gender</th>
       <th>coach</th>
    
    </tr>
    
    <?php
    foreach ($reservation as $une_ligne_de_reservation) {
        echo "<tr><td>".$une_ligne_de_reservation->name."</td>";
        echo "<td>".$une_ligne_de_reservation->firstname."</td>";
        echo "<td>".$une_ligne_de_reservation->age."</td>";
        echo "<td>".$une_ligne_de_reservation->phone."</td>";
        echo "<td>".$une_ligne_de_reservation->email."</td>";
        echo "<td>".$une_ligne_de_reservation->date."</td>";
        echo "<td>".$une_ligne_de_reservation->bookingtime."</td>";
        echo "<td>".$une_ligne_de_reservation->sportsclasses."</td>";
        echo "<td>".$une_ligne_de_reservation->gender."</td>";
        echo "<td>".$une_ligne_de_reservation->coach."</td>";
        echo "<td><a href='delete.php?id=".$une_ligne_de_reservation->id."'>supprimer</a></td>";      
        echo "<td><a href='update.php?id=".$une_ligne_de_reservation->id."'>modifier</a></td></tr>";
    }
    ?>
    
</table>

<?php


$description = "Réservez votre coaching dès maintenant en remplissant ce formulaire.";
$titre = "Votre formulaire d'inscription";

?>

<main class="container">
    <h1> <?php echo $titre ?> </h1>
    <h2> <?php echo $description ?> </h2> 
    
<form action="/cours/create.php" method="POST">
   
    
    <label for="firstname"> Nom </label>
    <input type="text" id="firstname" name="firstname">

    <label for="lastname"> Prénom </label>
    <input type="text" id="lastname" name="lastname">

    <label for="age"> Age </label>
    <input type="number" id="age" name="age">

    <label for="phone"> Téléphone </label>
    <input type="number" id="phone" name="phone">

    <label for="email"> Email </label>
    <input type="email" id="email" name="email">

    <label for="date"> Date de naissance </label>
    <input type="date" id="Date" name="date">



    <label for="heure de reservation"> Reservation </label>
    <div>
    
    <input type="radio" id="h8" name="heure" value="08" checked />
    <label for="h8">08:00 à 09:00</label>
    <br>
  
    <input type="radio" id="h9" name="heure" value="09"  />
    <label for="h9">09:00 à 10:00</label>
    <br>
   
    <input type="radio" id="h10" name="heure" value="10"  />
    <label for="h10">10:00 à 11:00</label>
    <br>
  
    <input type="radio" id="h11" name="heure" value="11"  />
    <label for="h11">11:00 à 12:00</label>
    <br>
   
    <input type="radio" id="h12" name="heure" value="12"  />
    <label for="h12">12:00 à 13:00</label>
    <br>
  
    <input type="radio" id="h13" name="heure" value="13"  />
    <label for="h13">13:00 à 14:00</label>
    <br>
    
    <input type="radio" id="h14" name="heure" value="14"  />
    <label for="h14">14:00 à 15:00</label>
    <br>
  
    <input type="radio" id="h15" name="heure" value="15"  />
    <label for="h15">15:00 à 16:00</label>
    <br>

    <input type="radio" id="h16" name="heure" value="16"  />
    <label for="h16">16:00 à 17:00</label>
    <br>
   
    <input type="radio" id="h17" name="heure" value="17"  />
    <label for="h17">17:00 à 18:00</label>
    <br>
  
    <input type="radio" id="h18" name="heure" value="18"  />
    <label for="h18">18:00 à 19:00</label>
    <br>
    
    <input type="radio" id="h19" name="heure" value="19"  />
    <label for="h19">19:00 à 20:00</label>
    <br>
  
    <input type="radio" id="h20" name="heure" value="20"  />
    <label for="h20">20:00 à 21:00</label>
    
  </div>
  <br>



    <label for="type de cours et professeurs"> Type de cours et professeurs </label>
    <select genre="Type de cours" id="type de cours" name="typedecours">
        <option value="Maxime dévéloppement force">Maxime dévéloppement force</option>
        <option value="Thomas dévéloppement force">Thomas dévéloppement force</option>
        <option value="Vincent dévéloppement force">Vincent dévéloppement force</option>
        <option value="Clara dévéloppement force">Clara dévéloppement force</option>
        <option value="Marie cardio training">Marie cardio training</option>
        <option value="Emilie Cardio training">Emilie Cardio training</option>
        <option value="Loic Cardio training">Loic Cardio training</option>
        <option value="Isabelle Cross training">Isabelle Cross training</option>
        <option value="Pierre Cross training">Pierre Cross training</option>
        <option value="Benoit Cross training">Benoit Cross training</option>
        <option value="Théo renforcement musculaire">Théo renforcement musculaire</option>
        <option value="Laurent renforcement musculaire">Laurent renforcement musculaire</option>
        <option value="Elise renforcement musculaire">Elise renforcement musculaire</option>
        <option value="Laura renforcement musculaire">Laura renforcement musculaire</option>
    </select>
   
 

    <label for="genre"> Genre </label>
    <select genre="genre" id="genre" name="genre">
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
    </select>


    <button>Envoyer</button>

   
</form>
</main>
     

