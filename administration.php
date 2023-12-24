<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace administrateur</title>
    <link rel="icon"  href="logo2-removebg-preview.png">
    <style>
        body{
            background-image:url("succès.png");
        }
        h1{ margin-left:400px;
        color:#53a0ec;}
        #table{
            margin-left:350px;
            margin-top:30px;
        }
        #color{color:#ffe4b7;}
        #colore{color:white;}
        table{ color:white;
            margin-left:500px;
            margin-top:100px;
        }
        #ko:hover{}
        #kola:hover{}
        #kola{ background-color:#53a0ec; border-radius:10px;
            margin-left:50px; position: absolute;
        }
        #ko{margin-left:520px;  background-color:#53a0ec; border-radius:10px;}
        #lin{
            margin-left:-80px;
        }
        #p{color:white; 
        font-size:30px;
    margin-top:20px;
       margin-left:-50px;}
       #tete{
        color:#ffe4b7;
       }
       
       #rese{
        color:white;
        margin-left:-50px;
        margin-top:20px;
       }
    </style>
</head>
<body>

<img width="53" height="53" src="https://img.icons8.com/external-vectorslab-flat-vectorslab/53/external-Welcome-Board-travel-and-hotels-vectorslab-flat-vectorslab.png" alt="external-Welcome-Board-travel-and-hotels-vectorslab-flat-vectorslab"/>
    <h1>Bienvenu,MS/Mme dans votre espace </h1>
    <form action="administration.php" method="POST">
		<table border="1" bgcolor="#53a0ec">
		<tr><td>Mot Clé: </td><td><input type="text" name="mc"></td></tr>
		</table>
		<br>
		<input type="submit" value="Rechercher"id="ko"  > &nbsp;&nbsp;<input id="kola" type="reset" value="Annuler">
	</form>
    <?php 
    include('fonction.php');
	if(isset($_POST['mc'])) // variable existant
	{
		if(!empty($_POST['mc'])) //champs non vide
		{
			connection();
			$sql1="select * from reservation where id='".$_POST['mc'].
			"' or nom='".$_POST['mc']."' 
			 or email='".$_POST['mc']."'";
			$reponse = $bdd->query($sql1);
			$nbrDeLigne = $reponse->rowCount();
			echo "<center id='rese'> <b>Il y a ".$nbrDeLigne." réservation(s)</b></center>";
?>
			<center><table border="1" id='lin'>
			    <tr id='tete'><th>id</th><th>Nom</th><th>personne</th><th>Email</th><th>Supprimer</th></tr>
			<?php
				while($enreg = $reponse->fetch())
				{//debut de while
				echo "<tr><td>".$enreg['id']."</td>";
				echo "<td>".$enreg['nom']."</td>";
				echo "<td>".$enreg['personne']."</td>";
				echo "<td>".$enreg['email']."</td>";
				echo "<td><a href='suppression.php?id=".$enreg['id']."'>Supprimer</a></td>";
				echo "</tr>";
				} // fin de while
			echo "</table>";
		} // fin de if de champs vide
				else // si le champs mc est vide
				 echo "<center id='p'> Veuillez entrer un mot  clé</center>";
	} //fin de if de variable existants
			?>

</body>
</html>