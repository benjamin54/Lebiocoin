

 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>

  <link rel="stylesheet" href="accueil.css">
</head>
<body>
<CENTER>
<h2>Administrateur <?php echo '.$_SESSION['pseudoadmin']';?></h2>

 <p>  <INPUT TYPE="submit" NAME="ajouter id" VALUE=" ajouter un utilisateur"> <a href="listemembre.php"><INPUT TYPE="submit" NAME="Liste" VALUE=" Liste des utilisateurs">   </a>       </p>
<p>       <INPUT TYPE="submit" NAME="supprimera" VALUE=" supprimer une annonce">                   <INPUT TYPE="submit" NAME="ajoutera" VALUE=" ajouter une annonce">   

<a href="pagedaccueil.php" <INPUT TYPE="submit" NAME="voir site" VALUE=" voir mon site"> </a>  

<a href="decon.php">Se deconnecter</a>
</CENTER>
</body>
</html> 





        
 