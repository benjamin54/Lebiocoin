
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>LeBioCoin</title>
	<link rel="stylesheet" href="styles/header.css">
	<link rel="icon" type="image/png" href="Images/favicon-32x32.png" sizes="32x32"/> <!-- ici la favicon, ici pamplemousse, se mettant à côté du title -->
	
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

	<div id="connexion" onClick="bascule('connex');"><a href="connexion2.0.php">Connexion</a></div>

	<div id="inscription"><a href="inscription.php">Inscription</a></div>

	
<div id="bloc1">

	<div id="nom">
		<h1>LeBioCoin</h1>
	</div>

	<div id="logo">
		<a href="pagedaccueil.php"><img src="Images/logo.PNG" width="160" height="170"></img></a>
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

<!--	<div id="recherche">
		<form >
			<input class="barre" type="search" name="recherche" placeholder="Rechercher"/>
			<input class="bouton" type="submit" value="OK"/>
		</form> 
	</div>
</div>
-->



<div id="bloc3">

	<div id="newsletter">
		<p class="titre_footer1">LA NEWSLETTER</p>
		<form action="news">
			<input type="text" name="pseudo" placeholder="Rentrer votre email" />
			<input type="bouton" name="submit" value=" Envoyer"/>
		</form>
	</div>


	
	<footer>
		<center>
			<ul>
				<li><a href="contact.php">Contact/Demandes</a></li>

				<li><a href="quisommesnous.php">Qui sommes-nous ?</a></li>
			</ul>
		</center>
	</footer>
</div>


	</body>

	</html>
