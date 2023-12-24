<?php
function connection(){
    try { global $bdd;
        $bdd=new PDO('mysql:host=localhost;dbname=il mago chef;charset=utf8', 'root', '');}
        catch(Exception $e){
            die ('Erreur : '.$e->getMessage());
        }
   
}?>