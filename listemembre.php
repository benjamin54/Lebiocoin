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
    $prenom= $row->prenom;
    $adressemail= $row->adressemail;
  }
    ?>
      <tr>
        <td> <?php echo $prenom; ?></td>
        <td><?php echo $nom; ?></td>
        <td><?php echo $adressemail; ?></td>
        <td><?php echo "X"; ?></td>
      </tr>
    </table>
    </center>
    </div>
    </body>
</html>