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
$bdd->query('DELETE FROM annonce WHERE id_annonce='.$_GET['delete'].'');


    $request=$bdd->query('SELECT * FROM annonce ORDER BY id_annonce');
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
    
    <h2>LES ANNONCES</h2>
    <center>
    <table>
      <th>titre_annonce</th>
      <th>id_annonce</th>
      <th>Membre</th>
      <th>image</th>
      <th>Effacer</th>
      <?php 
      while($row = $request->fetch(PDO::FETCH_OBJ))
    {  
    $image_annonce=$row->image_annonce;
    $titre_annonce= $row->titre_annonce;
    $id_annonce=$row->id_annonce;
    $id_membre= $row->id_membre;
    ?>
    <?php
    if(isset($_POST['supprimmer']))
{
     $delete=$bdd->query('DELETE * FROM annonce');
   }
    ?>
      <tr>
        <td><?php echo $titre_annonce ?></td>
        <td><?php echo $image_annonce ?></td>
        <td><?php echo $id_annonce ?></td>
        <td><?php echo $id_membre ?></td>
        <td><a href ="listeannonce.php?delete=<?php echo $id_annonce; ?>">Supprimer</a></td>
        </tr>'
    <?php

    }

   ?>
      
    </table>
    </center>
    </div>
    </body>
</html>