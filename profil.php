<?php

session_start();
$bdd= new PDO('mysql:host=127.0.0.1;dbname=mabase','root','');

if(isset($_GET['id']) AND $_GET['id']>0 )
{
$getid=intval($_GET['id']);
$requser=$bdd->prepare('SELECT * FROM membre where id_membre=?');
$requser->execute(array($getid));
$userinfo=$requser->fetch();


?>

<?php include("headermembre.php") ?>
<div id="contenuaccueil" align="center">
  <h4>Profil de <?php echo $userinfo['pseudo']; ?></h4>
  <br/><br/>
  Pseudo=<?php echo $userinfo['pseudo']; ?>
  <br/>
  Mail=<?php echo $userinfo['adressemail']; ?>
<?php  
if (isset($_SESSION['id_membre']) AND $userinfo['id_membre']==$_SESSION['id_membre']{
  ?>
  <br/>
<a href="#">Editer mon profil</a>
<?php
}
?>

    </div>

  </body>

  </html>
<?php
}

?>