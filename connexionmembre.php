<html>
<head>
   <meta charset="utf-8"/>
  <link rel="stylesheet" href="accueil.css">
</head>



<body>
<h2>J'ai déja un compte :</h2>
<h1>Se connecter</h1>
<form action="connexionmembre.php" method="post">
 <p>Adresse mail:<input type="mail" name="adressemail"   /> </p>
<p>Mot de passe: <input type="password" name="motdepasse1"  /></p>
 <p><INPUT TYPE="submit" NAME="Valider" VALUE=" Envoyer"></p>
</form>

</body>
</html> 







 <?php


session_start();



$bdd= new PDO('mysql:host=127.0.0.1;dbname=mabase','root','');
if(isset($_POST['Valider']))
{
  $adressemail=($_POST['adressemail']);
  $motdepasse1=sha1($_POST['motdepasse1']);
  if(!empty($adressemail) AND !empty($motdepasse1))
  {
    $requser=$bdd->prepare("SELECT * FROM membre WHERE adressemail=? AND motdepasse1=?");
  //execution requete
    $requser->execute(array($adressemail,$motdepasse1));
    $userexist=$requser->rowCount();
    // compte le nombre de rangée qui correspondent aux informations de l'utilisateur
if($userexist==1){
$userinfo=$requser->fetch();
$_SESSION['id']=$userinfo['id'];
$_SESSION['adressemail']=$userinfo['motdepasse1'];
header("Location:indexe.php?id=".$_SESSION['id']);

}
?>
<div id="contenuaccueil">
<?php
else{
  $erreur="mauvais pseudo ou mot de passe";
}
}
  else {
    $erreur="Veuillez remplir tout les champs!";
  }


if(isset($erreur))
{
  echo'<font color="red">'.$erreur."</font>";
}
}

?>
</div>
<?php


?>