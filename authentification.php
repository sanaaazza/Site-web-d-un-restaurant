<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authetification</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon"  href="logo2-removebg-preview.png">
    <style>
        body{
            background-image:url("autback.png")
        }
        fieldset{border-color:#ffe4b7 ;}
        form{margin: 150px 300px 0px -190px;
       padding-left: 300px; padding-right: 300px; border-color:#ffe4b7;}
       #email{width: 165%; height: 50px; border: none; background-color: #242222;
    border-color: #242222; color: #ffe4b7;}
    #modepasse{width: 165%; height: 50px; border: none; background-color: #242222;
    border-color: #242222;color: #ffe4b7; }
       tr{line-height: 6;}
    input{border-radius: 20px;}
       #button{height: 30px; ; margin-left: 200px; border: none; 
         background-color: #e25a42 ; border-radius: 20px; color: hsl(38, 100%, 86%);}
         #button:hover{color:#ffe4b7 ; background-color: #e25a42;
            scale:1.2;
  
  box-shadow: 0 0  20px #e25a42;
} 
img{width: 420px; border : 2px #ffe4b7;
    height: 342px; margin-left: 482px; margin-top: -320px;position: relative;
margin-bottom: -14px; margin-right: -10px;}
   legend{color: #e25a42; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;} 
   .message {
 font-size: 40px;
 font-weight: 600;
 text-align: center;
   color: #ffe4b7;
   position: absolute;
   left: 200px;
   top: 550px;
 }
 .message span {
  margin-right: 5px;
}


@keyframes bounce {
  0% { transform: translateY(0); }
  50% { transform: translateY(-5px); }
  100% { transform: translateY(0); }
}  
.messag {
 font-size: 30px;
 font-weight: 600;
 text-align: center;
   color: #ffe4b7;
   position: absolute;
   left: 200px;
   top: 550px;
 }
 .messag span {
  margin-right: 5px;
}



    </style>
    <script src="resto.js"></script>
</head>
<body>
    <form action="" method="post" onsubmit="autentifier()">
        <fieldset>
            <legend><strong>Authetification</strong></legend>
            <table>
                <tr>
                   
                    <td><input type="email" id="email" name="email" placeholder="alexhider@gmail.com"></td>
                </tr>
                <tr>
                    <td><input type="password" id="modepasse" name="modepasse" placeholder="Mot de passe"></td></tr>
                    <td><input type="submit" id="button" value="Authentifier"></td>
                    
            </table>

            <img src="photoauto.png" alt="">
        </fieldset>
      
    </form>
    <?php
session_start();
include('fonction.php');

if(isset($_POST['email']) && isset($_POST['modepasse'])){
    if(!empty($_POST['email']) && !empty($_POST['modepasse'])){
        connection();
        $req="SELECT email,password FROM reservation ";
        $reponse= $bdd->query($req);

        $isUser = false;

        while($donne=$reponse->fetch()){
            if(($donne['email']==$_POST['email']) && ($donne['password']==$_POST['modepasse'])){
                $_SESSION['password'] = $_POST['modepasse'];
                $isUser = true;
                break;
            }
        }

        if ($isUser) {
            header('Location:succès.php');
            exit();
        } else {
            // Vérifier si c'est un administrateur
            if ($_POST['email'] == 'sanaaazza90@gmail.com' && $_POST['modepasse'] == 'adminadmin') {
                header('Location: administration.php');
                exit();
            } else {
                echo '<center class="message">
                        <span>
                            <i class="fas fa-times-circle"></i>
                        </span>
                        Vous ne pouvez pas accéder aux réservations!
                    </center>';
            }
        }
    } else {
        echo '<center class="message">
                <span>
                    <i class="fas fa-times-circle"></i>
                </span>
                Les informations sont incorrectes
            </center>';
    }
}
?>
    
</body>
</html>