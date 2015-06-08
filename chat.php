<html>
<head>

    <meta charset="utf-8"/>
    <title>LeBiocoin</title>
    <link rel="stylesheet" href="styles/header.css">
    <?php include("header.php") ?>

 </head>


<body>
<div id="discussion">
     
          
            <h2>DISCUTER EN LIGNE AVEC LES AUTRES MEMBRES !</h2>
              <h7>Venez discuter,échanger, demander conseil...</h7>

            <p>
              <label for="texte"> Votre Post:</label> 
              <textarea name="texte" id="texte" wrap="off" rows="6" cols="50" required></textarea>      
            </p>
            <p>
              <input type="submit" name="sauver" id="sauver" value="Publier">
            </p>
              
                
<?php
// Connexion à la base de données

$bdd = new PDO('mysql:host=localhost;dbname=mabase', 'root','');

 if(isset($_POST['pseudo']) AND isset($_POST['message']) AND !empty($_POST['pseudo']) AND !empty($_POST['message']))
 {
          $pseudo = htmlspecialchars($_POST['pseudo']);
          $message =htmlspecialchars($_POST['message']);
$insertmsg= $bdd->prepare('INSERT INTO chat(pseudo,message) VALUES (?,?) ');
$insertmsg->execute(array($pseudo,$message));
 }
   // rows="8" cols="45"
?>
<html>
<body>
<form method="post" action ="">
  <br> 
<p>Pseudo:<input type="text" name="pseudo" placeholder="votre pseudo du chat" value="<?php if(isset($pseudo)) { echo $pseudo;} ?>   "/></p>
<p align="left">Message: <textarea type="text" name ="message" > </textarea></p>
<br/>

<input type="submit" name="envoyer" />

</form>
<?php

$allmsg= $bdd->query('SELECT * FROM chat ORDER BY id_chat DESC');
while($msg= $allmsg->fetch())
{
  ?>
  <b><?php echo $msg['pseudo'] ?> : </b>
<?php echo $msg['message']



 ?><br />


<?php
}

?>
  </div>

  </body>



            
          



        



</html>
