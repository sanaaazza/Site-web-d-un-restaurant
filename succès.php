
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification</title>
  
    <link rel="icon"  href="logo2-removebg-preview.png">
    <style>
   
        body{
            background-image:url("sans.png")
        }
     div{ 
      margin-top:90px;
      margin-right:200px;
      margin-left:200px;
      z-index:888888;
        border-radius:10px;
        border :1px solid white;
        background:transparent;
        backdrop-filter:blur(2px);
     }
      #paragraphe {
        line-height:50px;
 
  margin-left:250px;
  width: 500px;
  font-size: 30px;
  text-align: left;
  margin-top:20px;
  color: #ffffff;
}
h2{ 
  position: absolute;
  margin-top:-40px;
  margin-left:450px;
  text-align:center;
  color:tomato;
}

#paragraphe p {
 
  font-family: sans-serif;
}
    </style> 
</head>
<body>
  <?php 
session_start();

if(isset($_SESSION['password'])){
    $mdp = $_SESSION['password'];
    // Vous pouvez maintenant utiliser la variable $email dans votre page
    include('fonction.php');
    connection();
    $req="SELECT nom,personne,date,heure FROM reservation WHERE password='$mdp' ORDER BY date DESC LIMIT 1";
    $reponse=$bdd->query($req);
    $donne=$reponse->fetch();
      echo "<center><h2> Bonjour Monsieur/Madame  ".$donne['nom']." </h2></center>";
    

 echo " <div><center id='paragraphe'>Nous avons le plaisir de confirmer votre réservation d'une
  table pour ".$donne['personne']." personnes au restaurant Il Mago Chef."."<br>".

"Votre réservation est prévue pour le ". $donne['date'] ." à ".$donne['heure']."

Nous vous remercions de votre confiance et nous vous souhaitons un excellent repas."."<br>".

"A bientôt,<br>

L'équipe du restaurant Il Mago Chef .</center></div>";
    

    $reponse->closeCursor();
}
?>
 
</body>
</html>