<?php include("includes/header.php"); ?>

<div id="contenuaccueil">
  <h4> <CENTER>JE CREE MON ANNONCE </CENTER></h4>

  <p>
    Veuillez remplir le formulaire ci dessous. Les champs  
    <p2 style="color:red"> * </p2> sont obligatoires.</font>
  </p>
<form method="post" action="controlleurs/traitement_annonce.php">


<fieldset>
  <legend><b>Catégorie</b></legend>

<p>
  Catégorie:
  <select name="choixx">
    <option value="choix02">Fruits</option>
    <option value="choix03">Légumes</option>
  </select>
  <p2 style="color:red"> *</p2>
</p>

<p>
  Type d'annonce: 
  <input type="radio" name="achat" value="achat" id="achat"/> <label for="achat">Achat</label>
  <input type="radio" name="echange" value="echange" id="echange"/> <label for="echange">Echange</label>
  <p2 style="color:red"> *</p2>
</p>
</fieldset>

  <fieldset>
        <legend><b>Localisation</b></legend>

  <p>
    Code postal: <input type="text" name="codepostal" id="codepostal"/> <p2 style="color:red"> *</p2>
  </p>

  <p>
    Ville:  
    <input type="text" name="ville" id="ville"/><p2 style="color:red"> *</p2>  
  </p>

  <p>
    D&eacutepartement/R&eacutegion:
    <select name="choix">

      <option value="choix1" selected="selected">Alsace</option>

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
    </select>
    <p2 style="color:red"> *</p2>
  </p>
</fieldset>
<fieldset>
  <legend><b>Vos informations</b></legend>
  <p>
    Votre nom:
    <input type="mail" name="adressemail" value=""/><p2 style="color:red"> *</p2>
  </p>
  <p>
    Adresse mail:
    <input type="mail" name="adressemail" value=""/><p2 style="color:red"> *</p2>
  </p>
  <p>
    Téléphone:
    <input type="tel" name="tel" value=""/><p2 style="color:red"> *</p2>
  </p>
</fieldset>

<fieldset>
  <legend><b>Votre annonce</b></legend>
<p>
  Titre de l'annonce
  <input type="text" name="Titre" /><p2 style="color:red"> *</p2>
</p>

<p>
    <label for="photo_annonce">Choix d'une photo pour votre produit: </label>
    <input type="file" name="photo_annonce" id="photo_annonce"/> <!-- mettre une photo à l'annonce -->
</p>
   

  <p>
      <label for="ameliorer">
        Texte de l'annonce: <p2 style="color:red"> *</p2><br>
      </label>
       
      <textarea name="ameliorer" id="ameliorer" rows="10" cols="50">
      </textarea>       
  </p>

<p>
  Prix:
  <input type="text" name="prix" id="prix"/><p2 style="color:red"> *</p2>
</p>
</fieldset>

  <p>
  <input type="submit" name="sauver" id="sauver" value="Sauvegarder l'annonce">
  </p>

</form>
</div>

<?php include("includes/footer.php"); ?>
</html>

