<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8"/>
  <title>LeBioCoin</title>
  <link rel="icon" type="image/png" href="Images/favicon-32x32.png" sizes="32x32"/> <!-- ici la favicon, ici pamplemousse, se mettant à côté du title -->
  <link rel="stylesheet" href="includes/header.css">

</head>

<body>

  <div id="menu">
        <ul height="100" width="500">
          <li class="menu1"><a href ="pagedaccueil.php">ACCUEIL</a></li><!--
          --><li class="menu1">LEGUMES</li><!--
          --><li class="menu1"><a href="fruit.php">FRUITS</a></li><!--
          --><li class="menu1">LABEL BIO</li><!--
          --><li class="menu1">RECETTES</li><!--
          --><li class="menu1">FORUM</li>
          </ul>
  </div>

  
  <div id="photo">
      <img src="Images/imagedefond_fruit.jpg" height="1500" width="1368"></img>
      <!-- possible de telecharger la photo?-->
  </div>


  

  <div id="bloc1">

          <div id="nom">
            <h1>LeBioCoin</h1>
          </div>

          <div id="logo">
            <img src="Images/logo.PNG" width="160" height="150"></img> <!-- mettre l'image dans le dossier Images-->
          </div>

          <div id="nom2">
            <p> Site de vente de fruits & légumes</p>
          </div>

  </div>


  

  <div id="bloc2">

          <div id="recherche">
            <form action=" ">
              <input class="barre" type="search" name="recherche" placeholder="Rechercher"/>
              <input class="bouton" type="submit" value="OK"/>
            </form> 
          </div>


          <div id="menu_vertical">
            <ul>
              <li class="menu2"><a href="http://www.creativejuiz.fr/blog/theme/css-css3">Actualités</a></li><!--
            --><li class="menu2"><a href="http://www.creativejuiz.fr/blog/theme/css-css3">Annonce</a><li><!--
            --><li class="menu2"><a href="http://www.creativejuiz.fr/blog/theme/css-css3">Panier</a></li><!--
            --><li class="menu2"><a href="http://www.creativejuiz.fr/blog/theme/css-css3">Compte</a></li><!--
             --><li class="menu2"><a href="http://www.creativejuiz.fr/blog/theme/css-css3">Déconnexion</a></li>
            </ul>
          </div>

  </div>




  <div id="bloc3">

          <div id="newsletter">
            <p class="titre_footer1">LA NEWSLETTER</p>
            <form action="news">   <!-- la methode d'envoi?-->
              <input type="text" name="pseudo" placeholder="Rentrer votre email" />
              <input type="bouton" name="submit" value=" Envoyer"/>
            </form>
          </div>

          
          <div id="revue">
            <p class="titre_footer2">LA REVUE</p>
          </div>

  </div>


</body>

</html>