<!DOCTYPE hmtl>

<html>
<head>

    <meta charset="utf-8"/>
    <title>LeBiocoin</title>
    <link rel="stylesheet" href="styles/header.css">
    <?php include("header.php"); ?>
</head>


<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=mabase', 'root','');


if(isset($_SESSION['id_membre']))
{
	$requser = $bdd->prepare("SELECT * FROM membre WHERE id_membre = ?");
	$requser->execute(array($_SESSION['id_membre']));
	$user = $requser->fetch();


	//prenom
	if(isset($_POST['newprenom']) AND !empty($_POST['newprenom']) AND $_POST['newprenom'] != $user['prenom'])
	{
		$newprenom = htmlspecialchars($_POST['newprenom']);
		$insertprenom = $bdd->prepare("UPDATE membre SET prenom = ? WHERE id_membre = ?");
		$insetprenom->execute(array($newprenom, $_SESSION['id_membre']));
		header('Location: indexe.php?id='.$_SESSION['id_membre']);
	}


	//nom
	if(isset($_POST['newnom']) AND !empty($_POST['newnom']) AND $_POST['newnom'] != $user['nom'])
	{
		$newnom = htmlspecialchars($_POST['newnom']);
		$insertnom = $bdd->prepare("UPDATE membre SET nom = ? WHERE id_membre = ?");
		$insetnom->execute(array($newnom, $_SESSION['id_membre']));
		header('Location: indexe.php?id='.$_SESSION['id_membre']);
	}


	//pseudo
	if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo'])
	{
		$newpseudo = htmlspecialchars($_POST['newpseudo']);
		$insertpseudo = $bdd->prepare("UPDATE membre SET pseudo = ? WHERE id_membre = ?");
		$insetpseudo->execute(array($newpseudo, $_SESSION['id_membre']));
		header('Location: indexe.php?id='.$_SESSION['id_membre']);
	}

	//mail
	
	if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['adressemail'])
	{
		$newmail = htmlspecialchars($_POST['newmail']);
		$insertmail = $bdd->prepare("UPDATE membre SET adressemail = ? WHERE id_membre = ?");
		$insetmail->execute(array($newmail, $_SESSION['id_membre']));
		header('Location: indexe.php?id='.$_SESSION['id_membre']);
	}
		

	//mdp
	if(isset($_POST['newmotdepasse1']) AND !empty($_POST['newmotdepasse1']) AND isset($_POST['newmotdepasse2']) AND !empty($_POST['newmotdepasse2']))
	{
		$mdp1 = sha1($_POST['newmotdepasse1']);
		$mdp2 = sha1($_POST['newmotdepasse2']);

		if($mdp1 == $mdp2)
		{
		$insertmdp = $bdd->prepare("UPDATE membre SET motdepasse1 = ? AND motdepasse2 = ? WHERE id_membre = ?");
		$insertmdp->execute(array($mdp1, $_SESSION['id_membre']));
		header('Location: indexe.php?id='.$_SESSION['id_membre']);
		}
		
	}
	
	

	//num tel
	if(isset($_POST['newnum']) AND !empty($_POST['newnum']) AND $_POST['newpnum'] != $user['num'])
	{
		$newnum = htmlspecialchars($_POST['newnum']);
		$insertnum = $bdd->prepare("UPDATE membre SET num = ? WHERE id_membre = ?");
		$insetnum->execute(array($newnum, $_SESSION['id_membre']));
		header('Location: indexe.php?id='.$_SESSION['id_membre']);
	}

	//region
	if(isset($_POST['newregion']) AND !empty($_POST['newregion']) AND $_POST['newregion'] != $user['region'])
	{
		$newregion = htmlspecialchars($_POST['newregion']);
		$insertregion = $bdd->prepare("UPDATE membre SET region = ? WHERE id_membre = ?");
		$insetregion->execute(array($newregion, $_SESSION['id_membre']));
		header('Location: indexe.php?id='.$_SESSION['id_membre']);
	}

	//ville
	if(isset($_POST['newville']) AND !empty($_POST['newville']) AND $_POST['newville'] != $user['ville'])
	{
		$newville = htmlspecialchars($_POST['newville']);
		$insertville = $bdd->prepare("UPDATE membre SET ville = ? WHERE id_membre = ?");
		$insetville->execute(array($newville, $_SESSION['id_membre']));
		header('Location: indexe.php?id='.$_SESSION['id_membre']);
	}
}

/*else
{
	header("Location: pagedaccueil.php");
}*/
?>
<body>

    <div id="contenuaccueil">
        <form method="POST" action="inscriptionMod.php">
          
            <h2>Editer mon profil</h2>
              
               
              
                

                  
                    <table>
                        <tr>
                        <td><h3>Mes identifiants</h3></td>
                        </tr>
                        <tr>
                          <td align="right">
                              <label for="prenom">Prénom :</label>
                          </td>
                          <td>
                              <input type="text" placeholder="Votre prénom" id="prenom" name="newprenom">
                          </td>
                        </tr>
                        <tr>
                          <td align="right">
                              <label for="nom">Nom :</label>
                          </td>
                          <td>
                              <input type="text" placeholder="Votre nom" id="nom" name="newnom">
                          </td>
                        </tr> 
                        <tr>
                          <td align="right">
                              <label for="pseudo1">Pseudo :</label>
                          </td>
                          <td>
                              <input type="text" placeholder="Votre pseudo" id="pseudo1" name="newpseudo">
                          </td>
                        </tr> 
                        <tr>
                          <td align="right">
                              <label for="mail">Mail :</label>
                          </td>
                          <td>
                              <input type="email" placeholder="Votre email" id="mail" name="newadressemail">
                          </td>
                        </tr> 
                        <tr> 
                          <td align="right">
                              <label for="mdp1">Mot de passe :</label>
                          </td>
                          <td>
                              <input type="password" placeholder="Votre mot de passe" id="mdp1" name="newmotdepasse1">
                          </td>
                        </tr>
                        <tr> 
                          <td align="right">
                              <label for="mdp2">Confirmation du mot de passe :</label>
                          </td>
                          <td>
                              <input type="password" placeholder="Confirmer le mot de passe" id="mdp2" name="newmotdepasse2">
                          </td>
                        </tr>
                         <tr>
                         <td> <h3>Mes coordonnées de livraison</h3></td>
                         </tr>
                        <tr>
                          <td align="right">
                              <label for="numero">Votre numéro de téléphone :</label>
                          </td>
                          <td>
                              <input type="text" placeholder="Votre numéro de téléphone" id="numero" name="newnum">
                          </td>
                        </tr>  
                          <td align="right">
                              <label for="region">Région :</label>
                          </td>
                          <td>
                              <input type="text" placeholder="Choisissez votre région" id="region" name="newregion">
                          </td>
                        </tr>
                          <td align="right">
                              <label for="ville">Ville :</label>
                          </td>
                          <td>
                              <input type="text" placeholder="Votre Ville" id="ville" name="newville">
                          </td>
                        </tr>
                      </table>

                        <CENTER><input type="submit" name="editionprofil" value="Editer mon profil"></CENTER>

                 


    

            
          </form>
          <?php 
          if(isset($msg))
          	{ 
          		echo $msg;
          	}

          ?>


  </div>

</body>
</hmtl>
