<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script src="resto.js"></script>
    <link rel="icon"  href="logo2-removebg-preview.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        nav{display: flex; margin-top: 40px; position: absolute; margin-left: 700px;}
#t1{ color: rgb(250, 73, 8); text-decoration:none;}
#t2{  margin-left: 20px; color: rgb(250, 73, 8); text-decoration:none; list-style-type: none;
  cursor: pointer; margin-top: -4px; font-size: 20px; }
#t3{  margin-left :60px; color: rgb(250, 73, 8); text-decoration:none; position: relative;}
#t4{ margin-left: 60px; color:#ffe4b7;text-decoration:none; position: relative;}
#t1:hover{color:#ffe4b7; }
#t2:hover{color: #ffe4b7  ;}
#t3:hover{color:#ffe4b7;  }
#t4:hover{color:rgb(250, 73, 8);  }
#logo1 {position: absolute;  width: 5%;margin-left: 40px; margin-top: -2px;}
#tit1{position: absolute ; margin-left: 115px; margin-top: 7px;
color:  rgb(250, 73, 8); font-family:Georgia, 'Times New Roman', Times, serif
;}
.sous-menu { 
  display: none;
  list-style-type: none;
  padding-right: -40px;
  margin-left: -100px;
 margin-top: 30px;
}
.backcolor{
  background-color: #FFFFE0;
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
    background-color: #ffe4b7; /* Couleur de la ligne */
   
}
body{background-color: #100f0f;}
img{width: 100.5%;}
#column1{width: 15%; margin-top: -1200px; margin-left: 910px;}
#column2{width: 15%; margin-left: 1120px; margin-top: -550px;}
#column1 img{border: 1px solid #ffe4b7;}
#column2 img{border: 1px solid #ffe4b7;}
label{
    text-align: left;
}
form{margin-left: 80px; 
margin-top: -520px;  }
#Nom{margin-left: 100px; background-image: url(input.png);}
#eml{margin-left: 100px; margin-top: 100px;background-image: url(input.png);}
#message{margin-left: 100px; margin-top: 100px;background-image: url(input.png);}
input{width: 30%; border-color:#ffe4b7 ; 
    padding: 8px;  color: #FFFFE0;
    box-sizing: border-box; background-color: #201f1f;}
textarea{width: 30%;
    border-color: #ffe4b7;
   color: #FFFFE0;
    box-sizing: border-box; background-color: #201f1f;
}
#envoyer{margin-top: 30px; margin-left: 100px;color:#e25a42;
     background-color: #ffe4b7; border-radius: 20px; }
#envoyer:hover{color:#ffe4b7 ; background-color: #e25a42;
  box-shadow: 0 0  5px #e25a42;
  box-shadow: 0 0  20px #e25a42;
  box-shadow: 0 0  60px #e25a42;
  box-shadow: 0 0  20px #e25a42;
} 
fieldset{border: 2px solid #ffe4b7;}
footer{display: flex;margin-top: -300px;  margin-left:700px; text-align: left; position: absolute;}
footer ul li{text-decoration: none; list-style-type: none;text-align: left; 
    color: #ffe4b7; line-height: 2.8;
    font-family:'Cambria', 'Cochin', Georgia, Times, 'Times New Roma8n', serif; }
 h3{margin-left: 30px ; color: #e25a42;
    font-family: 'Cambria',' Cochin', Georgia, Times, 'Times New Roman', serif;}   
 
    .container {
  position: relative;
  width: 100%;
}

.image { height: auto; margin-top: 310px; border-radius: 10px;
  display: block;
  width: 40%; 
  height: auto;
}
.overlay {opacity:0.5;  border-radius: 10px;
  position: absolute;
  bottom: 0; margin-left: -800px;
  left: 0;
  right: 0;
  background-color: #ffe4b7;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
}
.container:hover .overlay {height: 98.9%;
  width: 100.3%; margin-left: 2px; margin-top: -40px;
}
.text { margin-left: -400px;
  color: rgb(249, 5, 5);
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  white-space: nowrap;
}
.ligne-separable {position: absolute;margin-top: 90px; margin-left: -6px;
    width: 99.8%;
    height: 1px; /* Épaisseur de la ligne */
    background-color: #ffe4b7; /* Couleur de la ligne */
   
}
.ligne-separable1 {position: absolute; margin-left: 532px; margin-top: -3px;
    width: 59.8%;
    height: 1px; /* Épaisseur de la ligne */
    background-color: #ffe4b7; /* Couleur de la ligne */
   
}
.ligne-separable2 {position: absolute; margin-left: 532px;margin-top: -354px;
    width: 59.8%;
    height: 1px; /* Épaisseur de la ligne */
    background-color: #ffe4b7; /* Couleur de la ligne */
   
}
.socials{display: flex; margin-top: -100px; }

button{ 
background-color: transparent; border: none;  }
#face{width: 40px;  position: absolute;margin-left: 50px;  }
#linkedin{width: 40px; position: absolute; border-radius: 3px;  margin-left: -50px;}
#insta{width: 40px;position: absolute;}
#face:hover{background-color: blue;border-radius: 9px;}
#insta:hover{border-radius: 9px;
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);  }
#linkedin:hover{background-color: #1d4ed8;;border-radius: 9px;}
button{ position:absolute; margin-top: 30px; margin-left: 1220px;background-color: transparent; border: none; }
#auth{width: 30%; background-color:#ffe4b7; border-radius: 20px;}
button :hover{ border-radius: 20px; scale: 1.2;}
.message {
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: sans-serif;
  font-size: 40px;
  color: #ffe4b7;
  margin-top:-500px;
  margin-left:-600px;
}

.message i {
  filter: drop-shadow(0 0 5px #28a745);
  animation: bounce 1s ease-in-out infinite;
  color: green;
  font-size: 30px;
  width: 24px;
  height: 24px;
}

@keyframes bounce {
  0% { transform: translateY(0); }
  50% { transform: translateY(-5px); }
  100% { transform: translateY(0); }
}
.messag {
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: sans-serif;
  font-size: 40px;
  color: #ffe4b7;
  margin-top:-500px;
  margin-left:-600px;
}

.messag i {
  filter: drop-shadow(0 0 5px #28a745);
  animation: bounce 1s ease-in-out infinite;
  color: red;
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
</head>
<body>
   
    <header><img src="logo2-removebg-preview.png" alt="icon" id="logo1">
        <h1 id="tit1">Il Mago <br>
            Chef   </h1>
            <nav>
              <a href="resturant.php" id="t1">ACCUEIL</a>
    
                <ul id="t2" onclick="toggleSousMenu('sousMenuListe')">
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
          <button onclick="redirigerVersPage()"><img src="authen-removebg-preview.png" alt="" id="auth"></button></header>

          </header>
          <div class="ligne-separable"></div> 
          <img src="nvcontact1.png" alt="">
           <div class="annimation">
            <div class="column" id="column1">
              <img src="div1.png" style="height: 20%">
              <img src="div2.png" style=" height:-5%">
              
            
            </div>
            <div class="column" id="column2">
              <img src="div4.png" style="height:0%">
              <img src="div5.png" style="size: 10%">
              <img src="lazania.jpg" style="height: 10%">
    
            </div>  
        </div>
        <div ><form action="contact.php" method="POST" onsubmit="contact()">
          <div id="ligne1">
            <input type="text"id="Nom" placeholder="Nom"  name="prenom"></div>  
           <div id="ligne2">
            <input type="email" id="eml" placeholder="locasnori00@gmail.com" name="email"></div> 
           <div id="ligne3">
            <textarea  placeholder="Message..." id="message" cols="30" rows="10"  name="msg" > 
         </textarea></div>
         <input type="submit" name="envoyer" id="envoyer" value=" Envoyez">

        </div></form>
        <div class="container">
            <img src="coffee.png.jpg" alt="Avatar" class="image">
            <div class="overlay">
              <div class="text">N'hésitez pas à nous  contacter pour
                 réserver  une  table   ou pour <br> toute   demande particulière. 
                Nous sommes impatients de partager <br> notre passion 
                pour la cuisine avec vous.</p>
      </div>
            </div>
          </div>
        <footer>
            <div>
            
        
            <h3>Contactez-nous et connectez-vous</h3>
            <ul><li><strong>T:</strong>0616318487</li>
            <li><strong>Whatsapp:</strong>0710417102</li>
          <li type="gmail"><strong>E:</strong>ilmagochef0@gmail.com</li>
        <li>Siége social N°7 Rue Somia <br> Quartier Palmier Casablanca</li></ul>
          </div>
         
        </footer>

        <div class="ligne-separable2"></div> 
        <div class="ligne-separable1"></div> 
        <div class="socials">
          <button ><a href="https://www.facebook.com/profile.php?id=61552770584621" target="_blank"><img src="face.png" alt="" id="face"></button></a>
          <button ><a href=""><img src="instgrame.png" alt="" id="insta" target="_blank"></button></a>
          <button ><a href="https://www.linkedin.com/company/100457684/admin/feed/posts/?feedType=following" target="_blank"><img src="linko.png" alt="" id="linkedin"></button></a>
       </div> 
       <?php
      include('fonction.php');
      if(isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['msg']))
       {
       if(!empty($_POST['prenom'] && !empty($_POST['email'] && !empty($_POST['msg'])))){
          connection();

        $req="INSERT INTO contacternous(nom,email,message) VALUES('{$_POST['prenom']}','{$_POST['email']}','{$_POST['msg']}')";
          $bdd->exec($req);
          echo '<center class="message">
         <span><i class="fas fa-envelope-open"></i></span>
          Votre message a été envoyé</center>';}
        
     else {echo '<center class="messag">
      <span><i class="fas fa-sad-tear"></i></span>
      Veuillez remplir les champs !!</center>';}}
       ?>

?>
</body>
</html>