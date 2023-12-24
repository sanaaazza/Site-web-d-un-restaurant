<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression</title> <link rel="icon"  href="logo2-removebg-preview.png">
    <style>
        body{
            background-image:url("succès.png");
        }
        #p{
            color:white;
            font-style:system-ui;
            font-size:40px;
        }
        #p1{
            color:#ffe4b7;
            font-style:serif;
            font-size:30px;
            margin-top:30px;
        }
        #tab{border-radius:10px;
        border :1px solid white;
        background:transparent;
        backdrop-filter:blur(2px);
            margin-top:40px;
            color:white;
            margin-left:350px;
        }
        #color{
            color:#ffe4b7; 
        }
    </style>
</head>
<body>
<img width="53" height="53" src="https://img.icons8.com/external-vectorslab-flat-vectorslab/53/external-Welcome-Board-travel-and-hotels-vectorslab-flat-vectorslab.png" alt="external-Welcome-Board-travel-and-hotels-vectorslab-flat-vectorslab"/>
<?php
include('fonction.php');
connection();

if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Utiliser une requête préparée pour éviter les injections SQL
    $sql = "DELETE FROM reservation WHERE id = :id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Exécuter la requête
    if ($stmt->execute()) {
        echo "<center id='p'> La réservation : <strong id='ni' >$id</strong> est supprimée avec succès</center>";

        connection();

// Récupération des réservations depuis la base de données
$sql = "SELECT id, nom, personne, date, heure, num FROM reservation";
$result = $bdd->query($sql);
echo "<center id='p1'> Vériffiez le tableau </center>";
// Affichage du tableau
echo "<table border='1' id='tab'>";
echo "<tr id='color'><th>id</th><th>Nom</th><th>Nombre de personnes</th><th>Date</th><th>Heure</th><th>Numéro de téléphone</th></tr>";

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr id='colore'>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['nom']}</td>";
    echo "<td>{$row['personne']}</td>";
    echo "<td>{$row['date']}</td>";
    echo "<td>{$row['heure']}</td>";
    echo "<td>{$row['num']}</td>";
    echo "</tr>";
}

echo "</table>";

// Fermer la connexion à la base de données
$result->closeCursor();
    } else {
        echo "<center id='p'> Une erreur s'est produite lors de la suppression de la réservation</center>";
    }
} else {
    echo "<center id='p'> L'ID de la réservation n'est pas spécifié</center>";
}
?>
</body>
</html>