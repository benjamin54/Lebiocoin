  html>
  <head>

      <meta charset="utf-8"/>
      <title>LeBiocoin</title>
      <link rel="stylesheet" href="styles/header.css">
      <?php include("headeradmin.php"); ?>

   </head>


  <body>

      <div id="contenuaccueil">
  <style>
  table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      background-color:white;
  }
  th, td {
      padding: 5px;
  }
  </style>
  </html>
  <h2>


  <?php        
  /*la fonction session_start  doit être appelée avant tout code html 
  Elle nous permet de verifier si une session a été ouverte 
  il faut noter que dans cette page, elle est facultative 
  */  
    
            echo"<h2>LES MEMBRES </h2>";  

  ?>
    <?php
  //on se connecte à MySql


  try{ 
  $bdd= new PDO('mysql:host=127.0.0.1;dbname=mabase','root',''); 
  //on selectionne les données de la table membre par ordre d'id 
  }
  catch(Exception $e) {
    die('Erreur: '.$e->getMessage());


  }
  $request=$bdd->query('SELECT * FROM membre ORDER BY id_membre');


  ?>
  <center>
  <table>
    <th>Prenom</th>
    <th>Nom</th>
    <th>Adresse mail</th>
    <th>Effacer </th>



    <?php 

    while($row = $request->fetch(PDO::FETCH_OBJ))
  {  
  $nom= $row->nom;
  $prenom= $row->prenom;
  $adressemail= $row->adressemail;
  ?>

    <tr>
      <td> <?php echo $prenom; ?></td>
      <td><?php echo $nom; ?></td>
      <td><?php echo $adressemail; ?></td>
      <td><?php echo "X"; ?></td>
    </tr>
  </table>


  </h2>

















    </div>

  </body>

  </html>