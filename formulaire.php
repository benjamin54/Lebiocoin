<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>  <!-- cette ligne sert à ce qu'on ai pas besoin d'ecrire le code des accents-->
  <title>Création de votre compte personnel</title>
  <link rel="stylesheet" href="formulaire.css">
</head>
<body>
<font size=4>
    <center>

<p>Nouveau membre ? Bienvenue !</p></b>
<p> CREEZ VOTRE COMPTE,</p><p style="color:green">C'EST GRATUIT</p></b>
<p> Création de votre compte personnel</p></b>

<table border=1 >  <!-- bordure droite du tableau à mettre pareil que bordure gauche -->


<form action ="cible.php" method ="POST" enctype="multipart/form-data"> <!-- creation du formulaire, ce qui est entré va dans la page cible.php-->
  
  

  <TD bgcolor="#f1f1c1">

<h5>
<p>Vos identifiants</p>
<HR>
<p><label>Prénom : <input type="text" name="prenom"/></label><p1 > *</p1>  <!-- ne pas retirer type="text" parce que ce n'est PAS du css -->
    <label>Nom : <input type="text" name="nom" /></label><p1 > *</p1></p>
<p><label>Date de Naissance : <input name="datedenaissance"/></label><p1 > *</p1></p>	
<p>
<label>Adresse mail : <input type="text" name="adressemail" value="dupontjean@gmail.com"/></label><p1 > *</p1></p>

<p>
<label>Mot de passe : <input type="password" name="motdepasse1"/></label><p1 > *</p1><p1 >(8 caractères minimum)</p1></p>

<p>
<label>Confirmez votre mot de passe : <input type="password" name="motdepasse2"/></label><p1 > *</p1></p>

<HR>
<p>Vos coordonnées de livraison<p>
<HR>

<p><label>Adresse : <input name="adresse" /></label><p1 > *</p1> </p>

<p>
<label>Code postal : <input name="codepostal" /></label><p1 > *</p1></p>
<p>
<label>Ville : <input type="text" name="ville" /></label> <p1 > *</p1> </p>
<p>
<label>Département/Région :

<select name="choix">

    <option value="choix1" selected="selected">Alsace</option> <!-- Alsace en choix par défaut-->

    <option value="choix2">Aquitaine</option>

    <option value="choix3">Auvergne</option>

    <option value="choix4">Basse Normandie</option>

    <option value="choix5">Bourgogne</option>

    <option value="choix6">Bretagne</option>

    <option value="choix7">Centre</option>

    <option value="choix8">Champagne-Ardenne</option>
    
    <option value="choix9">Corse</option>

    <option value="choix10">Franche-Comté</option>

    <option value="choix11">Haute normandie</option>

    <option value="choix12">Ile de France</option>
 
    <option value="choix13">Languedoc Roussilon</option>

    <option value="choix14">Limousin</option>

    <option value="choix15">Loraine</option>

    <option value="choix16">Midi-Pyrénées</option>
 
    <option value="choix17">Nord pas de Calais</option>

    <option value="choix18">Pays de la Loire</option>

    <option value="choix19">Picardie</option>

    <option value="choix20">Poitou Charente</option>
 
    <option value="choix21">Provence Alpes Cote d'Azur</option>

    <option value="choix18">Rhône-Alpes</option>

</select></label></p>

<p>Numéro de fixe/mobile : <input name="numéro" /></p>

<p>Choix d'une photo de profil : <input type="file" name="image" /></p>

<HR>
<p>Accepter les conditions d'utilisations de LEBIOCOIN</p>
<HR>
 
<p><input type="checkbox" name="case" checked="checked" /> <label for="case"> </label>
    Je m'abonne à la newsletter 
</p>

<p>
    <input type="checkbox" name="conditions" id="case" /> <label for="case"> </label>
    J'accepte les conditions d'utilisations  de LEBIOCOIN<p1> *</p1>
</p>

<p><input type="submit" value ="Valider" /></p> <!-- bouton de submission qui envoie les données à la page cible.php-->
<p1 style="color:red">* Champs obligatoires</p1>

<td>
</form>
</table>


</center>
</font>
</body>
</html>
