<?php include("includes/header.php"); ?>

<div id="contenuaccueil">
  <h4> <CENTER>JE CREE MON ANNONCE </CENTER></h4>

  <p>
    <font style="Verdana"> Veuillez remplir le formulaire ci dessous. Les champs  
    <p2 style="color:red"> * </p2> sont obligatoires.</font>
  </p>

  <p>
    Adresse mail:
    <input type="mail" name="adressemail" value=""/><p2 style="color:red"> *</p2>
  </p>

  <p>
    Code postal <input type="text" name="codepostal" id="codepostal"/> <p2 style="color:red"> *</p2>
  </p>

  <p>
    Ville  
    <input type="text" name="ville" id="ville"/><p2 style="color:red"> *</p2>  
  </p>

  <p>
    D&eacutepartement/R&eacutegion:
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
    </select>
    <p2 style="color:red"> *</p2>
  </p>

<p>
  Catégorie: 
  <select name="choixx">
    <option value="choix0">Achat</option>
    <option value="choix01">Echange</option>
  </select>
  <p2 style="color:red"> *</p2>
</p>

<p>
  Prix
  <input type="text" name="Prix" /><p2 style="color:red"> *</p2>
</p>

<p>
  Titre de l'annonce
  <input type="text" name="Titre" /><p2 style="color:red"> *</p2>
</p>

<form method="post" action="traitement_annonce.php">
   <p>
      <label for="ameliorer">
        Rédigez l'annonce <p2 style="color:red"> *</p2><br>
      </label>
       
      <textarea name="ameliorer" id="ameliorer" rows="10" cols="50">
      </textarea>       
   </p>
</form>

<CENTER>
  <p>
  <INPUT TYPE="submit" NAME="Valider" VALUE=" ENVOYER">
  </p>
</CENTER>
</div>

<?php include("includes/footer.php"); ?>
</html>

