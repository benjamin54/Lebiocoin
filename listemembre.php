<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8"/>
        <title>LeBiocoin</title>
        <link rel="stylesheet" href="styles/header.css">
        <?php include("headeradmin.php"); ?>

     </head>
<?php
    try{ 
    $bdd= new PDO('mysql:host=127.0.0.1;dbname=mabase','root','');
    }
    catch(Exception $e) {
      die('Erreur: '.$e->getMessage());
    }
$bdd->query('DELETE FROM membre WHERE id_membre='.$_GET['delete'].'');


    $request=$bdd->query('SELECT * FROM membre ORDER BY id_membre');
    ?>

    <body>

      <div id="contenuaccueil">
      <style>
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
          background-color:white;
          color:red;
        }
       th, td {
         padding: 5px;
       }
      </style>  
    
    <h2>LES MEMBRES </h2>
    <center>
    <table>
      <th>Prenom</th>
      <th>Nom</th>
      <th>Adresse mail</th>
      <th>Effacer</th>
      <?php 
      while($row = $request->fetch(PDO::FETCH_OBJ))
    {  
    $nom= $row->nom;
    $id_membre= $row->id_membre;
    $prenom= $row->prenom;
    $adressemail= $row->adressemail;
    ?>
    <?php
    if(isset($_POST['supprimmer']))
{
     $delete=$bdd->query('DELETE * FROM membre');
   }
    ?>
      <tr>
        <td><?php echo $prenom ?></td>
        <td><?php echo $nom ?></td>
        <td><?php echo $adressemail;?></td>
        <td><a href ="listemembre.php?delete=<?php echo $id_membre; ?>">Supprimer</a></td>
        </tr>'
    <?php

    }

   ?>
      
    </table>
    </center>
    </div>
    </body>
</html>