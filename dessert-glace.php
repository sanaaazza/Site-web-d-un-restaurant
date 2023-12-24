<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desserts et Glace</title>
    
    <link rel="icon"  href="logo2-removebg-preview.png">
    <script src="resto.js"></script>
    <style> nav{display: flex; margin-top: 40px; position: absolute; margin-left: 700px;}
        #t1{ color: rgb(250, 73, 8); text-decoration:none;}
        #t2{  margin-left: 20px; color: #ffe4b7; text-decoration:none; list-style-type: none;
          cursor: pointer; margin-top: -4px; font-size: 20px; }
        #t3{  margin-left :60px; color: rgb(250, 73, 8); text-decoration:none; position: relative;}
        #t4{ margin-left: 60px; color:rgb(250, 73, 8);text-decoration:none; position: relative;}
        #t1:hover{color:#ffe4b7; }
        #t2:hover{color: rgb(250, 73, 8)  ;}
        #t3:hover{color:#ffe4b7;  }
        #t4:hover{color:#ffe4b7;  }
        #logo1 {position: absolute;  width: 5%;margin-left: 40px; margin-top: -2px;}
        #tit1{position: absolute ; margin-left: 115px; margin-top: 7px;
        color:  rgb(250, 73, 8); font-family:Georgia, 'Times New Roman', Times, serif
        ;}
        body{background-color: #242222;}
        .sous-menu {  z-index: 9999999999999999;
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
        .sous-menu li {background-color: #242222;
          padding: 8px;
        }
        .sous-menu li a:hover{ 
        color:#ffe4b7;
        }
        .sous-menu li a{list-style-type: none;  color:rgb(250, 73, 8); text-decoration: none;}
        .ligne-separable1 {position: absolute;margin-top: 90px; margin-left: -5px;
            width: 99%;
            height: 1px; /* Épaisseur de la ligne */
            background-color: #ccc; /* Couleur de la ligne */
           
        }
        .container{
    width: 100%;
    height: 500px;
  margin-top: 800px;
  margin-left: -32px;
   position: absolute;
    display: flex;
    color: #ffe4b7;
}

.col{
    position: relative;
    height: 100%; 
    flex: 1;
    box-sizing: border-box;
    padding: 20px;
    transition: 0.6s ease;
}



.caption{
    max-width: 230px;
    font-size: 20px;
    margin: 28px 0;
    display: none;
    animation: 0.6s;
}



.col img{
    width: 90%;
    height: 100%;
    position: absolute;
    right: 0;
    bottom: 0;
}

.col:hover{
    flex-grow: 2.5;
}

.col:hover .caption{
    display: block;
}
.gallery {
      position: fixed;
      position: absolute; 
      margin-top: 250px;
      margin-left:120px;

    width: 80%;
    height: 20%; 
    background-color: #FF9F20;
      display: flex;
      justify-content: center;
      align-items: center;
    }
   
    .image1{width: 30%; height: 310px; ; }
    .image3{width:30%; height: 310px; margin-left: 20px;  }
    .image2{width:30%; height: 310px; margin-left: 20px;  }
    .image1:hover{scale:1.2;
    }
    .image2:hover{scale:1.2;}
    .image3:hover{scale:1.2;}
        
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
          <div class="ligne-separable1"></div>
          </header>
          <div class="gallery">
            <img class="image1" src="tiramisu.jpg" alt="Image 1">
            <img class="image2" src="glace.jpg" alt="Image 2">
            <img class="image3" src="tartecitron.png" alt="Image 2">
            <div class="ligne-separable3"></div>
          </div>
          <div class="container">
            <div class="col">
                <img src="dessertgalseface.png" id="image">
            </div>
            <div class="col">
                <img src="dessert-glace.png" id="image">
            </div>
            
</body>
</html>