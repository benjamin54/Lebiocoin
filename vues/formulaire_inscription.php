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

  <!-- bordure droite du tableau à mettre pareil que bordure gauche -->

<form action ="cible.php" method ="POST" enctype="multipart/form-data"> <!-- creation du formulaire, ce qui est entré va dans la page cible.php-->
  
  <!-- <td bgcolor="#f1f1c1">  

<hr> -->
<fieldset>
        <legend><b>Votre identité</b></legend>
<p>
    <label for="prenom_membre">Prénom : </label>
    <input type="text" name="prenom_membre" id="prenom_membre"/><p1 > *</p1>  <!-- ne pas retirer type="text" parce que ce n'est PAS du css -->
    <label for="nom_membre">Nom : </label>
    <input type="text" name="nom_membre" id="nom_membre" /><p1 > *</p1>
</p>
<p>
    <label for="sexe">Sexe:</label>
    <select name="sexe" id="sexe">
        <option value="femme">Femme</option>
        <option value="homme">Homme</option>
    </select>
</p>
<p>
    <label for="date_naissance">Date de Naissance : </label>
    <input type="date" name="date_naissance" id="date_naissance"/><p1 > *</p1>
</p>	
</fieldset>

<fieldset>
    <legend><b>Vos coordonnées de livraison</b></legend>
        <p>
            <label for="adresse_mail">Adresse mail : </label>
            <input type="text" name="adresse_mail" id="adresse_mail" value="dupontjean@gmail.com"/><p1 > *</p1>
        </p>
        <p>
            <label for="tel">Numéro de fixe/mobile : </label>
            <input type="tel" name="tel" id="tel"/>
        </p>
        <p>
            <label for="adresse">Rue : </label>
            <input type="text" name="adresse" id="adresse"/><p1 > *</p1> 
        </p>
        <p>
            <label>Code postal : </label>
            <input type="text" name="codepostal" id="codepostal"/><p1 > *</p1></p>
        <p>
        <label for="ville">Ville : </label>
        <input type="text" name="ville" id="ville"/> <p1 > *</p1> 
        </p>

<p>
<label for="region">Département/Région :
    <select type="text" name="choix" id="choix">
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
    </select>
</label>
</p>
</fieldset>

<fieldset>
    <legend><b>Votre profil</b></legend>
        <p>
            <label for="pseudo_membre">Pseudo : </label>
            <input type="text" name="pseudo_membre" id="pseudo_membre"/><p1 > *</p1>
        </p>
        <p>
            <label for="mot_de_passe">Mot de passe : </label>
            <input type="password" name="mot_de_passe" id="mot_de_passe"/><p1 > *</p1><p1 >(8 caractères minimum)</p1>
        </p>
        <p>
            <label for="mot_de_passe">Confirmez votre mot de passe : </label>
            <input type="password" name="mot_de_passe" id="mot_de_passe"/><p1 > *</p1>
        </p>
        <p>
            <label for="photo_profil">Choix d'une photo de profil : </label>
            <input type="file" name="photo_profil" id="photo_profil"/>
        </p>
</fieldset>

<hr>
<p>Accepter les conditions d'utilisations de LEBIOCOIN</p>
<hr>
 
<p>
    <label for="case"> Je m'abonne à la newsletter</label>
    <input type="checkbox" name="case" id="case" checked="checked" />  
</p>
<p>
    <label for="conditions">J'accepte les conditions d'utilisations  de LEBIOCOIN </label>
    <input type="checkbox" name="conditions" id="conditions" /> <p1> *</p1>
</p>
<p><input type="submit" value ="Valider" /></p> <!-- bouton de submission qui envoie les données à la page cible.php-->
<p1 style="color:red">* Champs obligatoires</p1>

<!--<td> -->
</form>

  </center>
</font>
</body>
</html>
