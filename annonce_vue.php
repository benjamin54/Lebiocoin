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
$_SESSION['id_membre']=$userinfo['id_membre'];
$_SESSION['adressemail']=$userinfo['adressemail'];
$_SESSION['prenom']=$userinfo['prenom'];
$_SESSION['nom']=$userinfo['nom'];
$_SESSION['pseudo']=$userinfo['pseudo'];
$_SESSION['region']=$userinfo['region'];
header("Location:compte_utilisateur.php?id_membre=".$_SESSION['id_membre']);

}
else{
  $erreur="mauvais mail ou mot de passe";
}
}
  

if(isset($erreur))
{
  echo'<font color="red">'.$erreur."</font>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>LeBioCoin</title>
	<link rel="stylesheet" href="styles/header.css">
	<link rel="icon" type="image/png" href="Images/favicon-32x32.png" sizes="32x32"/> <!-- ici la favicon, ici pamplemousse, se mettant à côté du title -->
	<script language="Javascript"> 
		function bascule(elem) 
		{ 
// Quel est l'état actuel ? 
etat=document.getElementById(elem).style.visibility; 
if(etat=="hidden"){document.getElementById(elem).style.visibility="visible";} 
else{document.getElementById(elem).style.visibility="hidden";} 
} 
</script> 
</head>

<body>
<div id="menu">
		<ul>
             <li class="menu1"><a href ="pagedaccueil.php">ACCUEIL</a></li><!--
          --><li class="menu1"><a href="annonce_vue.php">ANNONCE LEGUMES</li><!--
          --><li class="menu1"><a href="annonce_vue.php">ANNONCE FRUITS</a></li><!--
          --><li class="menu1"><a href="forum/index.php">FORUM</a></li><!--
          --><li class="menu1"><a href="rechercheavancee2.0.php">RECHERCHE AVANCEE</a></li><!--
      -->
  </ul>
</div>	  

	<div id="connexion" onClick="bascule('connex');"><a>Connexion</a></div>

	<div id="inscription"><a href="inscription.php">Inscription</a></div>

	
<div id="bloc1">

	<div id="nom">
		<h1>LeBioCoin</h1>
	</div>

	<div id="logo">
		<img src="Images/logo.PNG" width="160" height="170"></img>
	</div>

	<div id="nom2">
		<p> Site de vente de fruits & légumes</p>
	</div>

</div>

<div id="menu_vertical">
	<ul>
              <li class="menu2"><a href="chat.php">Discussion membres</a></li><!--
            --><li class="menu2"><a href="annonce.php">Déposer Annonce</a></li><!--
            --><li class="menu2"><a href="inscription.php">Mes contacts</a></li><!--
            --><li class="menu2"><a href="profil.php">Mon Compte</a></li><!--
        --><li class="menu2"><a href="inscription.php">Déconnexion</a></li>
    </ul>
</div>


<div id="bloc2">
	<?php //partie annonce 
		try
{
	// On se connecte à MySQL
	$base = new PDO('mysql:host=localhost;dbname=mabase;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
	die('Erreur : '.$e->getMessage());
}
//$reponse = $base->query('SELECT `id_annonce`, `codepostal`, `ville`, `region`, `nom`, `mail`, `tel`, `titre`, `photo_annonce`, `texte`, `prix`, `date_ajout` FROM annonce WHERE id_annonce>=1');

// On récupère tout le contenu de la table annonce par date + recente
$reponse = $base->query('SELECT * FROM annonce WHERE date_ajout IS NOT NULL ORDER BY date_ajout DESC'); //annonces triées par date la plus récente

//d'abord selec legumes/fruits, puis localité et achat/echange
//toutes annonces où la ville est Paris et offres d'achat, tri plus récent
//$reponse = $base->query('SELECT * FROM annonce WHERE id_cat_produit = 1 AND ville = PARIS AND id_cat_annonce =1 ORDER BY date_ajout DESC ');
?>
<div id="recherche">
		<form >
			<input class="barre" type="search" name="recherche" placeholder="Rechercher"/>
			<input class="bouton" type="submit" value="OK"/><br/>
			<p><a href="rechercheavancee2.0.php">Recherche avancee</a></p>
		</form>
		
</div>
<?php
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
	?>
<div id="annoncecadre">
	<section id="annonce_gauche">
		<p id="titreannonce">Annonce : <?php echo htmlentities($donnees['titre']); ?></p>
		<p id="datehautgauche"><?php echo htmlentities($donnees['date_ajout']); ?></p>
		<p>	Mise en ligne par : <?php echo htmlentities($donnees['nom']) ?>. <br /><br/>
			<?php echo "<img src='controlleurs/uploads/".$donnees['photo_annonce']."',  width=\"300\" height=\"300\" onmouseover=\"this.width=400; this.heigth=400;\" onmouseout =\"this.width=300; this.heigth=300;\"alt=\"\">"; ?> <br/><br/>  
			Description : <br/> <?php echo htmlentities($donnees['texte'])?> 
		</p>
	</section>
	<section id="annonce_droite">
		<p><?php echo htmlentities($donnees['region']); ?></p>
		<p><?php echo htmlentities($donnees['codepostal']); ?></p>
		<p><?php echo htmlentities($donnees['ville']); ?></p>
		<p>Contacter : <a href="<?php 'echo htmlentities($donnees[\'mail\']);' ?>"><?php echo htmlentities($donnees['mail']); ?></a> </p>
		<p>Stock : <?php echo htmlentities($donnees['quantite']); ?> kgs.</p>
		<p>Prix : <?php echo htmlentities($donnees['prix']); ?> euros/kg.</p>
	</section>
</div>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
/*$codepostal=$sql->fetch()'codepostal';
$ville='ville';
$region='region';
$nom='nom';
$mail='mail';
$tel='tel';
$titre='titre';
$photo_annonce='photo_annonce';
$texte='texte';
$prix='prix';
$date_ajout='date_ajout';
*/
?>
	

<div id="bloc3">

	<footer>
		<center>
			<ul>
				<li><a href="contact.php">Contact/Demandes</a></li>

				<li><a href="quisommesnous.php">Qui sommes-nous ?</a></li>
			</ul>
		</center>
	</footer>
</div>
<div id="connex" style="visibility: hidden" name="connex">
	<h4>JE ME CONNECTE</h4>
	<form method="post" action="header.php">
		<p1><label>Adresse mail</label> : <input id="pseudo" type="text" name="adressemail" required /> </p>
		</br>
		<p2><label>Mot de passe</label> : <input id="mdp" type="password" name="motdepasse1" required /></p>
			<div id="oubli"><a href="mdpo.php">J'ai oublié mon mot de passe</a></div>
			<p id="valider"><INPUT TYPE="submit" NAME="Valider" VALUE="VALIDER">
			</form>
		</div>

	</body>

	</html>



