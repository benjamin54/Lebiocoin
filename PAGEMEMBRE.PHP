<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <title>LeBioCoin</title>
  <link rel="stylesheet" href="styles/header.css">
  <link rel="icon" type="image/png" href="Images/favicon-32x32.png" sizes="32x32"/> <!-- ici la favicon, ici pamplemousse, se mettant à côté du title -->

</head>

<body>

<div id="connexion"><a href=connexion.php>Connexion</a></div>

<div id="inscription"><a href=inscription.php>Inscription</a></div>

	<div id="menu">
        <ul height="100" width="500">
          <li class="menu1"><a href ="pagedaccueil.php">ACCUEIL</a></li><!--
          --><li class="menu1"><a href="annonce_vue.php">ANNONCE LEGUMES</li><!--
          --><li class="menu1"><a href="annonce_vue.php">ANNONCE FRUITS</a></li><!--
          --><li class="menu1"><a href="forum/index.php">FORUM</a></li><!--
          --><li class="menu1">RECETTES</li><!--
          -->
          </ul>
  </div>	  

  <div id="bloc1">

          <div id="nom">
            <h1>LeBioCoin</h1>
          </div>

          <div id="logo">
            <img src="Images/logo.PNG" width="160" height="150"></img>
          </div>

          <div id="nom2">
            <p> Site de vente de fruits & légumes</p>
          </div>

  </div>


  

  <div id="bloc2">

          <div id="recherche">
            <form >
              <input class="barre" type="search" name="recherche" placeholder="Rechercher"/>
              <input class="bouton" type="submit" value="OK"/>
            </form>  
          </div>


          <div id="menu_vertical">
            <ul>
              <li class="menu2"><a href="http://www.creativejuiz.fr/blog/theme/css-css3">Mon profil</a></li><!--
            --><li class="menu2"><a href="annonce.php">Mes annonces</a></li><!--
            --><li class="menu2"><a href="http://www.creativejuiz.fr/blog/theme/css-css3">Mes commandes</a></li><!--
            --><li class="menu2"><a href="compte_utilisateur.php"> Supprimer mon compte</a></li><!--
            --><li class="menu2"><a href="http://www.creativejuiz.fr/blog/theme/css-css3">Déconnexion</a></li>
            </ul>
          </div>

  </div>




  <div id="bloc3">

          <div id="newsletter">
            <p class="titre_footer1">LA NEWSLETTER</p>
            <form action="news">
              <input type="text" name="pseudo" placeholder="Rentrer votre email" />
              <input type="bouton" name="submit" value=" Envoyer"/>
            </form>
          </div>

          
          <div id="revue">
            <p class="titre_footer2">LA REVUE</p>
          </div>
          <footer>
			<center>
				<ul>
					<li><a href="contact.php">contact</a></li>
					
					<li><a href="mentionlegale.php">Infos légales</a></li>
					
					<li><a href="quisommesnous.php">qui sommes  nous ?</a></li>
					
					<li><a href="conditions.php">conditions générales de vente</a></li>
				</ul>
			</center>
		</footer>
  </div>


</body>

</html>