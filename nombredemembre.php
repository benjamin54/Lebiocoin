<?php


try{ 
$bdd= new PDO('mysql:host=127.0.0.1;dbname=mabase','root',''); 
//on selectionne les données de la table membre par ordre d'id 
}
catch(Exception $e) {
  die('Erreur: '.$e->getMessage());


}
$nombre=$bdd->query('SELECT COUNT(*) FROM membre ');




echo" Il y a actuellement .$nombre. membres sur votre site!";


?>





 




