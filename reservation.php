
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Réservation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon"  href="logo2-removebg-preview.png">
    <style>
      body{background-color: #100f0f;}
      img{width: 100%;}
      form{ margin-top: -800px; 
        width: 25%;
    border: 1px solid #FF8C00; /* Couleur de la bordure et épaisseur */
    border-radius: 8px; /* Coins arrondis */
    box-sizing: border-box; /* Inclut le rembourrage et la bordure dans la largeur/hauteur totale */
}
      #bloc1{
        margin-left: 180px;
      
      }
      #bloc2{
        margin-left: 180px;
        margin-top: 50px;
      }
      #bloc3{
        margin-left: 180px; margin-top: 50px;
      }
      #bloc4{
        margin-left: 180px;margin-top: 50px;
      }
      #bloc5{margin-left: 180px;margin-top: 50px;}
      #bloc6{margin-left: 180px;margin-top: 50px;}
      #bloc7{margin-left: 180px;margin-top: 50px;}
      
  #nom[type='text']{color:#FFFFE0;}
  #personne[type='number']{color:#FFFFE0;}
  #num[type='tel']{color:#FFFFE0;}
  #date[type='date']{color:#FFFFE0;}
  #time[type='time']{color:#FFFFE0;}
  #nom[type='text']{color:#FFFFE0;}
  #email[type='email']{color:#FFFFE0;}
  #password[type='password']{color:#FFFFE0;}
      #nom{ margin-left: 180px;position:absolute; width: 13.8%; }
      #personne{margin-left: 140px;position:absolute;  width: 13.8%;}
      #num{
        margin-left: 255px;position: absolute; width: 13.8%;
      }
     #date{margin-left: 260px; width: 13.8%; position: absolute;}
     #time{margin-left: 240px; width: 13.9%; position: absolute;}
     #email{position:absolute; margin-left:255px ; width: 13.8%; }
    #password{margin-left: 225px;position: absolute; width: 13.8%;}
    label{color:#e25a42; font-size:large;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;}
input{border: none;
    padding: 8px; 
    box-sizing: border-box; background-color: #201f1f;}
    #logo1 {position: absolute;  width: 5%;margin-left: 40px; margin-top: -2px;}
#tit1{position: absolute ; margin-left: 115px; margin-top: 7px;
color:  rgb(250, 73, 8); font-family:Georgia, 'Times New Roman', Times, serif
;}
#button{margin-top: 70px; margin-left: 360px; }
#buton{color: #ffe4b7; border-radius: 20px; 
  background-color:#e25a42;}
#buton:hover{color: #e25a42; 
  background-color: #ffe4b7;
  box-shadow: 0 0  5px #e25a42;
  box-shadow: 0 0  20px #e25a42;
  box-shadow: 0 0  60px #e25a42;
  box-shadow: 0 0  20px #e25a42;
}
nav{display: flex; margin-top: 40px; position: absolute; margin-left: 700px;}
#t1{ color: rgb(250, 73, 8); text-decoration:none;}
#t2{  margin-left: 20px; color: rgb(250, 73, 8); text-decoration:none; list-style-type: none;
  cursor: pointer; margin-top: -4px; font-size: 20px; }
#t3{  margin-left :60px; color: #ffe4b7; text-decoration:none; position: relative;}
#t4{ margin-left: 60px; color:rgb(250, 73, 8);text-decoration:none; position: relative;}
#t1:hover{color:#ffe4b7; }
#t2:hover{color: #ffe4b7  ;}
#t3:hover{color:rgb(250, 73, 8);  }
#t4:hover{color:#ffe4b7;  }
.sous-menu { 
  display: none;
  list-style-type: none;
  padding-right: -40px;
  margin-left: -100px;
 margin-top: 30px;
}
.backcolor{
  background-color: #ffe4b7;
  height:400px;
}
.sous-menu li {background-color: #101010;
  padding: 8px;
}
.sous-menu li a:hover{ 
color:#ffe4b7;
}
.sous-menu li a{list-style-type: none;  color:rgb(250, 73, 8); text-decoration: none;}
.ligne-separable {position: absolute;margin-top: 90px; margin-left: -5px;
    width: 99%;
    height: 1px; /* Épaisseur de la ligne */
    background-color: #ccc; /* Couleur de la ligne */
   
}
button{ position:absolute; margin-top: 30px; margin-left: 1220px;
background-color: transparent; border: none; }
#auth{width: 30%; background-color:#ffe4b7; border-radius: 20px;}
button :hover{ border-radius: 20px; scale: 1.2;}
.reservation-success {
 
  font-size: 30px;
  font-weight: 600;
  text-align: center;
    color: #ffe4b7;
    position: absolute;
    left: 100px;
    top: 950px;
  }
  .reservation {
 font-size: 40px;
 font-weight: 600;
 text-align: center;
   color: #ffe4b7;
   position: absolute;
   left: 250px;
   top: 940px;
 }
 .ms-icon {
  display: inline-block;
  margin-right: 5px;
}

.ms-icon i {
  font-size: 60px;
  color: #28a745;
}
.ms-icon {
  animation: bounce 2s ease-in-out infinite;
  filter: drop-shadow(0 0 10px #28a745);
}

@keyframes bounce {
  0% {
    transform: translate(0, 0);
  }
  50% {
    transform: translate(0, -10px);
  }
  100% {
    transform: translate(0, 0);
  }
}


.reservation span {
  margin-right: 5px;
}

.reservation span i {
  filter: drop-shadow(0 0 5px #28a745);
  animation: bounce 1s ease-in-out infinite;
  color: #dc3545;
  font-size: 30px;
  width: 24px;
  height: 24px;
}

@keyframes bounce {
  0% { transform: translateY(0); }
  50% { transform: translateY(-5px); }
  100% { transform: translateY(0); }
}
    </style>
    <script  src="resto.js"></script>
</head>
<body>

  <header><img src="logo2-removebg-preview.png" alt="icon" id="logo1">
    <h1 id="tit1">Il Mago <br>
        Chef   </h1>
        <nav>
          <a href="resturant.php" id="t1">ACCUEIL</a>

            <ul id="t2" onclick="toggleSousMenu('sousMenuListe')" >
              <li id="t22">Menu</li>
          </ul>
          <ul class="sous-menu" id="sousMenuListe">
            <li><a href="petitdéjeunner.php">Petit déjeuner</a></li>
                <li><a href="Fast-food.php">Fast food</a></li>
                <li><a href="Desserts-glace.php">Desserts et Glace</a></li>
                <li><a href="Repasquotidienne.php">Repas Quotidienne</a></li>
                <li><a href="Boisson.php">Boisson</a></li>
                <li><a href="Tajine.php">Tajine</a></li>
          </ul>
       <a href="réservation.php" id="t3">RÉSERVATION</a>
          <a href="contact.php" id="t4">CONTACT</a>
      </nav>
      <button onclick="redirigerVersPage()" ><img src="authen-removebg-preview.png" alt="" id="auth"></button>
      </header>
      <div class="ligne-separable"></div> 
  <img src="new1.png" alt="">
  
   
  <form action="reservation.php" method="POST" onsubmit="verification()">
    <fieldset >
      <div id="bloc1">
  <label for="nom" >Nom et Prénom</label>
  <input type="text" name="nom" id="nom" > </div>
  <div id="bloc2"> <label for="personne" >Nombre de personne</label>
  <input type="number" name="personne" id="personne" > </div>
 <div id="bloc3"> <label for="num" >N°Tél</label>
  <input type="tel" name="num" id="num" ></div>
  <div id="bloc4"><label for="date" >Date</label>
  <input type="date" name="date" id="date" ></div>
  <div id="bloc5" ><label for="time" >L'heure</label>
  <input type="time" name="time" id="time" >
</div>
<div id="bloc6"><label for="email">Email</label>
  <input type="email" id="email" name="emai"></div>
<div id="bloc7"><label for="password">Password</label>
  <input type="password" id="password" name="mdp"></div>
 <div id="button"><input type="submit" value="Réserver une Table" id="buton"></div>
</fieldset>
</form>
<?php
include('fonction.php');
if(isset($_POST['nom'] ) && isset($_POST['personne'])  && isset($_POST['num'])  && isset($_POST['date']) and isset($_POST['time']) && isset($_POST['emai']) && isset( $_POST['mdp']) )
{
  if(!empty($_POST['nom']) && !empty($_POST['personne']) && !empty($_POST['num']) && !empty($_POST['date']) && !empty($_POST['time'])  && !empty($_POST['emai']) && !empty($_POST['mdp']))
  {connection();
    $req = "INSERT INTO reservation (nom, personne, num, date, heure, email, password) VALUES ('{$_POST['nom']}', '{$_POST['personne']}', '{$_POST['num']}', '{$_POST['date']}',
     '{$_POST['time']}', '{$_POST['emai']}', '{$_POST['mdp']}')";
    $bdd->exec($req);
    echo '<center class="reservation-success">';
    echo '<span class="ms-icon">';
    echo '<i class="fas fa-check-circle"></i>';
    echo '</span>';
    echo 'Mme/Ms '.$_POST['nom']. ' votre réseravtion a été effectuée avec succés';
    echo '</center>';
    echo '<style>';
    echo '.ms-icon {';
    echo 'display: inline-block;';
    echo 'margin-right: 5px;';
    echo '}';
    echo '.ms-icon i {';
    echo 'font-size: 18px;';
    echo 'color: #28a745;';
    echo '}';
    echo '</style>';}
  else { echo '<center class="reservation">
    <span>
    <i class="fas fa-times-circle"></i>
  </span>
  Réservation echoué
  
</center>';}}

?>
</body>
</html>