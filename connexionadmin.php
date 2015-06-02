    <html>
    <head>
    <title>Connexion administrateur</title>
    <meta charset="utf-8"/>
    </head>

    <body>
    <form action="" method="post">
    Pseudo: <input type="text" name="pseudoadmin" required >
    <br />
   Mot de passe: <input type="password" name="mdpadmin" required ><br />
    <input type="submit" value="Connexion">
    </form>

    </body>
    </html>

     <?php


session_start();



$bdd= new PDO('mysql:host=127.0.0.1;dbname=mabase','root','');
if(isset($_POST['Valider']))
{
  $adressemail=($_POST['adressemail']);
  $motdepasse1=($_POST['motdepasse1']);
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