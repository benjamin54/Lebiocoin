



<h4>JE ME CONNECTE</h4>
	<form method="post" action="">
		<p1><label>Adresse mail</label> : <input id="pseudo" type="text" name="adressemail" /> </p>
		</br>
		<p2><label>Mot de passe</label> : <input id="mdp" type="password" name="motdepasse1"  /></p>

			<p id="valider"><INPUT TYPE="submit" NAME="Valider" VALUE="VALIDER">
			<?php
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=mabase', 'root','');
} 
catch (PDOException $e) {
    echo "Erreur ! ";
    die();
}



if(isset($_POST['Valider']))
{
  $adressemail=htmlspecialchars($_POST['adressemail']);
  $motdepasse1=sha1($_POST['motdepasse1']);
  if(!empty($adressemail) AND !empty($motdepasse1))
  {

  	 $requser=$bdd->prepare("SELECT * FROM membre WHERE adressemail=? AND motdepasse1=?");
  //execution requete
    $requser->execute(array($adressemail,$motdepasse1));
    $userexist=$requser->rowCount();
    if($userexist==1){

    }
    else {
    	$erreur="mauvais mail ou mot de passe!";
    }
}

  else {
    $erreur="Veuillez remplir tout les champs!";
  }
}
if(isset($erreur))
{
  echo'<font color="red">'.$erreur."</font>";
}

?>