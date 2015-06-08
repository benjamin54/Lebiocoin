
 <link rel="stylesheet" href="styles/header.css">
    <?php include("header.php"); ?>


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
<p><input type="text" name="pseudo" placeholder="votre pseudo du chat" value="<?php if(isset($pseudo)) { echo $pseudo;} ?>   "/></p>
<textarea type="text" name ="message" placeholder="message" rows="10" cols="45" >

</textarea>

<input type="submit" name="envoyer" />
</form>
<?php

$allmsg= $bdd->query('SELECT * FROM chat ORDER BY id_chat DESC');
while($msg= $allmsg->fetch())
{
	?>
	<b><?php echo $msg['pseudo'] ?> : </b>
<?php echo $msg['message'] ?><br />


<?php
}

?>
  </body>


