<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <title>LeBioCoin</title>
  <link rel="stylesheet" href="styles/header.css">
  <link rel="icon" type="image/png" href="Images/favicon-32x32.png" sizes="32x32"/> <!-- ici le favicon, ici pamplemousse, se mettant à côté du title -->
  
  <script language ="Javascript"> 
function bascule(elem) 
{ 
  // Quel est l'état actuel ? 
  etat=document.getElementById(elem).style.visibility; 
  if(etat == "hidden")
    {
      document.getElementById(elem).style.visibility="visible";
    } 
  else
    {
      document.getElementById(elem).style.visibility="hidden";
    } 
} 
</script> 
</head>



<body>

  <div id="connexion" onClick="bascule('connex');"><a>Connexion</a></div>

  <div id="inscription"><a href="inscription.php">Inscription</a></div>

	<div id="menu">
          <ul>
               <li class="menu1"><a href ="pagedaccueil.php">ACCUEIL</a></li><!--
            --><li class="menu1"><a href="annonce_vue.php">ANNONCE LEGUMES</li><!--
            --><li class="menu1"><a href="annonce_vue.php">ANNONCE FRUITS</a></li><!--
            --><li class="menu1"><a href="forum/index.php">FORUM</a></li><!--
            --><li class="menu1"><a>RECETTES</a></li><!--
            -->
            </ul>
  </div>	  

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
              <li class="menu2"><a href="http://www.creativejuiz.fr/blog/theme/css-css3">Actualités</a></li><!--
            --><li class="menu2"><a href="annonce.php">Déposer Annonce</a></li><!--
            --><li class="menu2"><a href="http://www.creativejuiz.fr/blog/theme/css-css3">Panier</a></li><!--
            --><li class="menu2"><a href="compte_utilisateur.php">Compte</a></li><!--
            --><li class="menu2"><a href="http://www.creativejuiz.fr/blog/theme/css-css3">Déconnexion</a></li>
            </ul>
 </div>
  

  <div id="bloc2">

          <div id="recherche">
            <form >
              <input class="barre" type="search" name="recherche" placeholder="Rechercher"/>
              <input class="bouton" type="submit" value="OK"/>
            </form> 
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
<div id="connex" style="visibility: hidden" name="connex">
<h4>JE ME CONNECTE</h4>
<form method="post" action="controlleurs/traitement.php">
<p1><label>Pseudo </label> : <input id="pseudo" type="text" name="pseudo"/> </p>
</br>
<p2><label>Mot de passe</label> : <input id="mdp" type="password" name="Mdp" /></p>
<div id="oubli"><a href="mdpo.php">J'ai oublié mon mot de passe</a></div>
<p id="valider"><INPUT TYPE="submit" NAME="Valider" VALUE=" VALIDER">
</form>
</div>

</body>

</html>