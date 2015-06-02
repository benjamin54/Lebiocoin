<?php include ('header.php') ?>

<?php session_start(); 

$_SESSION['codepostal']='75014';
$_SESSION['ville']='paris';
?>
<!DOCTYPE html>
<html>
<body>
  <div id="annonce">
    <h4>JE CREE MON ANNONCE</h4>

    <p>
      Veuillez remplir le formulaire ci dessous. Les champs <p2 style="color:red"> * </p2> sont obligatoires.</font>
    </p>

    <form method="POST" action="controlleurs/traitement_annonce.php" onSubmit="return verif_formulaire()" enctype="multipart/form-data">

      <fieldset>
        <legend><b>Catégorie</b></legend>

        <p>
          <label for="nom_categoriep">Catégorie:</label>
          <select name="nom_categoriep" id="nom_categoriep">
            <option value="fruit">Fruits</option>
            <option value="legume">Légumes</option>
          </select>
          <p2 style="color:red"> *</p2>
        </p>

        <p>
          <label for="nom_categoriea">Type d'annonce:</label> 
          <input type="radio" name="nom_categoriea" value="achat" id="nom_categoriea" checked/> Achat
          <input type="radio" name="nom_categoriea" value="echange" /> Echange
          <p2 style="color:red"> *</p2>
        </p>
      </fieldset>

      <fieldset>
        <legend><b>Localisation</b></legend>

        <p>
          <label for="codepostal">Code postal:</label> 
          <input type="text" name="codepostal" id="codepostal" value="<?php if (isset($_SESSION['codepostal'])){echo $_SESSION['codepostal'];} ?>" required/> <p2 style="color:red"> *</p2> <!-- voir -->
        </p>

        <p>
          <label for="ville">Ville: </label> 
          <input type="text" name="ville"$mail  id="ville" value="<?php if (isset($_SESSION['ville'])){echo $_SESSION['ville'];}?>" required/><p2 style="color:red"> *</p2>  
        </p>

        <p>
          <label for="region">D&eacutepartement/R&eacutegion:</label>
          <select name="region" id="region">

            <option value="Alsace" selected>Alsace</option>

            <option value="Aquitaine">Aquitaine</option>

            <option value="Auvergne">Auvergne</option>

            <option value="Base Normandie">Basse Normandie</option>

            <option value="Bourgogne">Bourgogne</option>

            <option value="Bretagne">Bretagne</option>

            <option value="Centre">Centre</option>

            <option value="Champagne-Ardenne">Champagne-Ardenne</option>

            <option value="Corse">Corse</option>

            <option value="Franche-Comté">Franche-Comté</option>

            <option value="Haute normandie">Haute normandie</option>

            <option value="Ile de France">Ile de France</option>

            <option value="Languedoc Roussilon">Languedoc Roussilon</option>

            <option value="Limousin">Limousin</option>

            <option value="Loraine">Loraine</option>

            <option value="Midi-Pyrénées">Midi-Pyrénées</option>

            <option value="Nord pas de Calais">Nord pas de Calais</option>

            <option value="Pays de la Loire">Pays de la Loire</option>

            <option value="Picardie">Picardie</option>

            <option value="Poitou Charente">Poitou Charente</option>

            <option value="Provence Alpes Cote d'Azur">Provence Alpes Cote d'Azur</option>

            <option value="Rhône-Alpes">Rhône-Alpes</option>
          </select>
          <p2 style="color:red"> *</p2>
        </p>
      </fieldset>
      <fieldset>
        <legend><b>Vos informations</b></legend>
        <p>
          <label for="nom">Votre nom:</label>
          <input type="text" name="nom" id="nom" value="" required/><p2 style="color:red"> *</p2>
        </p>
        <p>
          <label for="mail">Adresse mail:</label>
          <input type="mail" name="mail" id="mail" value="<?php if (isset($_SESSION['mail'])){echo $_SESSION['mail'];}?>" required/><p2 style="color:red"> *</p2>
        </p>
        <p>
          <label for="tel">Téléphone:</label>
          <input type="tel" name="tel" id="tel" value="<?php if (isset($_SESSION['tel'])){echo $_SESSION['tel'];}?>" required/><p2 style="color:red"> *</p2>
        </p>
      </fieldset>

      <fieldset>
        <legend><b>Votre annonce</b></legend>
        <p>
          <label for="titre">Titre de l'annonce</label>
          <input type="text" name="titre" id="titre" required /><p2 style="color:red"> *</p2>
        </p>

        <p>
          <label for="variete">Variété:</label>
          <select name="variete" id="variete">

          </select>
        </p>
        <p>
          <label for="photo_annonce">Choix d'une photo pour votre produit:</label>
          <input type="file" name="photo_annonce" id="photo_annonce" required/> <!-- mettre une photo à l\'annonce -->
        </p>


        <p>
          <label for="texte"> Texte de l'annonce:</label> 
          <textarea name="texte" id="texte" wrap="off" rows="6" cols="50" required></textarea> <p2 style="color:red"> *</p2>      
        </p>

        <p>
          <label for="quantite"> Quantité:</label>
          <input type="text" name="quantite" id="quantite" value="2" required/> (en kgs)<p2 style="color:red"> *</p2>
        </p>

        <p>
          <label for="prix"> Prix:</label>
          <input type="text" name="prix" id="prix" required/> (en euros/kg)<p2 style="color:red"> *</p2>
        </p>
      </fieldset>

      <p>
        <input type="submit" name="sauver" id="sauver" value="Sauvegarder l'annonce">
      </p>
    </div>
  </form>
</body>
</html>

