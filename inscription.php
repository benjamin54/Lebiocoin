<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
 <div id="bor"> <title>Le Biocoin</title>
  <link rel="stylesheet" href="accueil.css">
<div id=fond><body>
 <CENTER><div id="co"> <div></CENTER>
  <div id="ligne2"><h></div>
 <div id="forme">
  <div id="hautdepage"><p><a href="connexion.php">Je me connecte</a> <a href="inscription.php">Je m'inscris</a></p></div>
<p><p1>Le Biocoin</p1>
  <div id="logo"><img src="logo1.png"></img></div>
 <h3> Site de ventes de fruits & légumes</h3>

 <div id="pos"> <img src="fruits.jpg"></img></div>
    <nav>


        <ul><b>
          <li><a href ="pagedaccueil.php">ACCUEIL</a></li>
          <li>LEGUMES</li>
          <li><a href="fruit.php">FRUITS</a></li>
          <li>LABEL BIO</li>
          <li>RECETTES</li>
          <li>FORUM</li>
          </b>
        </ul>
      </nav>

<div id="contenuaccueil"><p><h4> <CENTER>NOUVEAU CLIENT ? </CENTER></h4></p>
  <p><font style="Verdana"> Veuillez remplir le formulaire ci dessous. Les champs  <p2 style="color:red">*</p2> sont obligatoires.</font></p>

          
<h4> <CENTER>Mes identifiants</CENTER> </h4>

<form name="inscription" method="post" action="inscription.php">
<p><p2 style="color:red">*</p2>nom:
 <input type="text" name="nom" />
  <p2 style="color:red">*</p2>prenom: <input type="text" name="prenom" /></p>

<p>
<p2 style="color:red">*</p2>Adresse mail:<input type="text" name="adressemail" value="dupontjean@gmail.com"/></p>

<p>
<p2 style="color:red">*</p2>Mot de passe:<input type="password" name="motdepasse1"/><p2 style="color:red">(8 caract&egraveres minimum)</p2> </p>

<p>
<p2 style="color:red">*</p2>Confirmer votre mot de passe:<input type="password" name="motdepasse2"/></p>


<h4><CENTER>Mes coordonées de livraisons</CENTER></h4>


<p>

<p>
<p2 style="color:red">*</p2>Ville  <input type="text" name="ville" />  </p>
<p>


</select>

<p>
<p2 style="color:red">*</p2>Num&eacutero de fixe/Mobile<input type="text" name="num" /></p>

<p>
<p2 style="color:red">*</p2>Choix d'une photo de profil: <input type="file" name="photo"/> </p>

<p><u>Accepter les conditions d'utilisations du BIOCOIN</u><p>


<p>"Je suis ag&eacute d'au moins 18 ans"</p>
   <p>"La transaction se fait en main propre, car le site a pour vocation de cr&eacuteer du lien localement"</p>
<p>
<input type="checkbox" name="case" id="case" /> <label for="case"> </label>
<p2 style="color:red">*</p2>J'accepte ces conditions
</p>



<CENTER><p> <input type="submit" name="valider"  value=" Valider ma création de compte"></p></CENTER>
</form>
<?php
        if (isset ($_POST['valider']))  
        {
            //On récupère les valeurs entrées par l'utilisateur :
            
            $prenom=$_POST['prenom'];
            $nom=$_POST['nom'];
             $adressemail=$_POST['adressemail'];
            $motdepasse1=$_POST['motdepasse1'];
             $motdepasse2=$_POST['motdepasse2'];
             $ville=$_POST['ville'];
             $num=$_POST['num'];

           $photo=$_POST['photo'];
           $case=$_POST['case'];
           
              
                
  
                 if (strlen($_POST['motdepasse1'])<8 ){
  //header('Location: do.php'); 
  echo"Le mot de passe doit contenir 8 caractères!";
}
else {
          echo "Veuillez remplir tous les champs"; 
        }


        
                  
                 


           
            
            
             $base = mysqli_connect ('localhost', 'root', '');  
              mysqli_select_db ($base,'mabase') ;
 
            //On prépare la commande sql d'insertion
      
             $sql = 'INSERT INTO membre VALUES ("","'.$prenom.'","'.$nom.'","'.$adressemail.'", "'.$motdepasse1.'",   "'.$motdepasse2.'",     "'.$ville.'",   "'.$num.'",  "'.$photo.'","'.$case.'")'; 
              //"'.$adressemail.'", "'.$motdepasse1.'", "'.$motdepasse2.'", "'.$adresse.'",   "'.$codepostal.'", "'.$ville.'","'.$choix.'","'.$num.'")'; 
 
            /*on lance la commande (mysql_query) et au cas où, 
            on rédige un petit message d'erreur si la requête ne passe pas (or die) 
            (Message qui intègrera les causes d'erreur sql)*/
            mysqli_query ($base,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($base)); 
 
            // on ferme la connexion
            mysqli_close($base);
        }
        
        ?>
</div>


<div id=page>
 
 <div id="posi"> <img src="icone.jpg"></img></div>
  <div id="posi2"> <img src="panier.jpg"></img></div>
  <div id="menu"></div>
</div>
<div id="h"></div>
<div id="gauche">

</div>


<div id="recherche">
<input type="texte" name="recherche" value="Je recherche..."/>
<input type="submit" value="OK"/> 
</div>
<b>
<ul> 
  <div id="bordureg">

<li>  Annonces échanges </li> <br><br>
<li>  Annonces Ventes </li><br><br>
<li> <a href="annonce.html">Je crée mon annonce</a>  </li> <br><br>
<li> Mentions legales</li><br><br>
<li>  Aide </li> 
</ul>
</b>
</div>
<div id="newsletter"><h4><u>LA NEWSLETTER</u></h4>
<p><input type="text" name="pseudo" value="rentrer votre mail" /> </p>
 <p><INPUT TYPE="submit" NAME="Valider" VALUE=" Envoyer"></p>

</div>


<div id="mag"><h4><u>LA REVUE</u></h4>
  <img src="mag.png"></img>

 <p><input type="text" name="pseudo" value="rentrer votre mail" /> </p>
 <p><INPUT TYPE="submit" NAME="Valider" VALUE=" Envoyer"></p>
 
 <div id="liste">


</div>


</div> 
</body>
</div>
</div>
</html>

