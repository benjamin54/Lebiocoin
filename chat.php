<!DOCTYPE html>

<html>
<head>

    <meta charset="utf-8"/>
    <title>LeBiocoin</title>
    <link rel="stylesheet" href="styles/header.css">
    <?php include("header.php") ?>

 </head>

              
                
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


<body>

  <div id="discussion">

    <form method="post" action ="">
  
      <fieldset>
        <legend><h2>Discussion</h2></legend>
          <br>
          <tr>
          <td> 
            <label>Pseudo: </label>
          </td>
          <td>    
            <input type="text" name="pseudo" placeholder="votre pseudo du chat" value="<?php if(isset($pseudo)) { echo $pseudo;} ?>   "/>
          </td>
        </tr>
        <br>
        <tr>
          <td>
            <label>Message: </label>
          </td>
          <td>
            <textarea type="text" name ="message" > </textarea>
          </td>
        </tr>
        <br/>

        <input type="submit" name="envoyer" value="Publier"/>

      </fieldset>
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
