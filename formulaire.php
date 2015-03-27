<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>  <!-- cette ligne sert à ce qu'on ai pas besoin d'ecrire le code des accents-->
  <title>Création de votre compte personnel</title>
  <link rel="stylesheet" href="formulaire.css">
<b>
</head>
<body>
<FONT SIZE=4>

	<CENTER>

<p>Nouveau membre ? Bienvenue !</p></b>
<p> CREEZ VOTRE COMPTE,</p><p style="color:green">C'EST GRATUIT</p></b>
<p> Création de votre compte personnel</p></b>

<TABLE border=1 >
<form action ="cible.php" method ="POST"> <!-- creation du formulaire, ce qui est entré va dans la page cible.php-->
  
  <TD BGCOLOR="#f1f1c1">

<h5>
<p>Mes identifiants</p>
<HR>
<p><label>Nom: <input type="text" name="nom" /></label><p1 >*</p1>  <!-- ne pas retirer type="text" -->
    <label>Prénom: <input type="text" name="Prenom"/></label><p1 >*</p1></p>
<p><label>Date de Naissance: <input name="Datedenaissance"/></label><p1 >*</p1></p>	
<p>
<label>Adresse mail:<input type="text" name="adressemail" value="dupontjean@gmail.com"/></label><p1 >*</p1></p>

<p>
<label>Mot de passe:<input type="password" name="motdepasse1"/></label><p1 >*</p1><p1 >(8 caractères minimum)</p1></p>

<p>
<label>Confirmez votre mot de passe:<input type="password" name="motdepasse2"/></label><p1 >*</p1></p>

<HR>
<p>Mes coordonées de Livraison<p>
<HR>

<p>
<label>Adresse  <input name="adresse" /> <input name="adresse" /></label><p1 >*</p1> </p>



 <p>
<label>Code postal <input name="codepostal" /></label><p1 >*</p1></p>
<p>
<label>Ville  <input type="text" name="ville" /></label> <p1 >*</p1> </p>
<p>
<label>Département/Région:

<select name="choix">

    <option value="choix1">Alsace</option>

    <option value="choix2">Aquitaine</option>

    <option value="choix3">Auvergne</option>

    <option value="choix4">Basse Normandie</option>


    <option value="choix1">Bourgogne</option>

    <option value="choix2">Bretagne</option>

    <option value="choix3">Centre</option>

    <option value="choix4">Champagne-Ardenne</option>
    
    <option value="choix5">Corse</option>

    <option value="choix6">Franche-Comté</option>

    <option value="choix7">Haute normandie</option>

    <option value="choix8">Ile de France</option>
 
    <option value="choix9">Languedoc Roussilon</option>

    <option value="choix10">Limousin</option>

    <option value="choix11">Loraine</option>

    <option value="choix12">Midi-Pyrénées</option>
 
    <option value="choix13">Nord pas de Calais</option>

    <option value="choix14">Pays de la Loire</option>

    <option value="choix15">Picardie</option>

    <option value="choix16">Poitou Charente</option>
 
    <option value="choix17">Provence Alpes Cote d'Azur</option>
 
<option value="choix18">Rhône-Alpes</option>

</select></label></p>

<p>
Numéro de fixe/mobile<input name="NUMÉRO" /></p>

<p>
Choix d'une photo de profil: <input type="file"/> </p>
<HR>
<p>Accepter les conditions d'utilisations de LEBIOCOIN</p>
<HR>
Cocher les produits que vous souhaiter mettre en vente:
<input type="checkbox" name="case" id="case" /><p><label for="case"></label></p>



  
<p>
<input type="checkbox" name="case" id="case" /> <label for="case"> </label>

	J'accepte les Conditions d'utilisations  de LEBIOCOIN<p1>*</p1>
</p>


<p1 style="color:red">* Champs Obligatoire</p1>
<TD>
</form>
</TABLE>


</CENTER>
</FONT>
</body>
</html>
