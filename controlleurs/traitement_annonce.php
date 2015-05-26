
<?php

session_start();
 
error_reporting(E_ALL);
if(!empty($_POST))  //on utilise des boucles pour vérifier que tous les champs sont remplis, équivalent à if(isset($_POST['nom'])&& $_POST['nom']!='' && $_POST['nom']!=='0'))
{
  $retour=1;
  foreach($_POST as $cle=>$val)
  {
    if(empty($val))
    {
      echo 'Le champ ',$cle,' est obligatoire.<br />';
      $retour=0;
    }
  }
  if($retour==0)
  {
    echo '<a href="javascript:history.go(-1);">Corriger ou compl&eacutetez les champs erron&eacutes !</a>';
  }
  else
  {
    echo 'C\'est bon, on poursuit donc l\'exécution du script'; ?></br><?php
  }
}
else
{
  echo '
  <form method="post" action="controlleurs/traitement_annonce.php">
  <div id="contenuaccueil">
  <fieldset>
  <legend><b>Catégorie</b></legend>

  <p>
  Catégorie:
  <select name="categorie" id="categorie">
  <option value="choix01">Fruits</option>
  <option value="choix02">Légumes</option>
  </select>
  <p2 style="color:red"> *</p2>
  </p>

  <p>
  Type d\'annonce: 
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
  <select name="region" id="region">

  <option value="Alsace" selected="selected">Alsace</option>

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

  <option value="Provence Alpes Cote d\'Azur">Provence Alpes Cote d\'Azur</option>

  <option value="Rhône-Alpes">Rhône-Alpes</option>
  </select>
  <p2 style="color:red"> *</p2>
  </p>
  </fieldset>
  <fieldset>
  <legend><b>Vos informations</b></legend>
  <p>
  Votre nom:
  <input type="text" name="nom" id="nom" value="" /><p2 style="color:red"> *</p2>
  </p>
  <p>
  Adresse mail:
  <input type="mail" name="mail" id="mail" value="" /><p2 style="color:red"> *</p2>
  </p>
  <p>
  Téléphone:
  <input type="tel" name="tel" id="tel" value=""/><p2 style="color:red"> *</p2>
  </p>
  </fieldset>

  <fieldset>
  <legend><b>Votre annonce</b></legend>
  <p>
  Titre de l\'annonce
  <input type="text" name="titre" id="titre" /><p2 style="color:red"> *</p2>
  </p>

  <p>
  <label for="photo_annonce">Choix d\'une photo pour votre produit: </label>
  <input type="file" name="photo_annonce" id="photo_annonce"/> <!-- mettre une photo à l\'annonce -->
  </p>


  <p>
  <label for="ameliorer">
  Texte de l\'annonce: <p2 style="color:red"> *</p2><br>
  </label>

  <textarea name="texte" id="texte" rows="10" cols="50">
  </textarea>       
  </p>

  <p>
  Prix:
  <input type="text" name="prix" id="prix"/><p2 style="color:red"> *</p2>
  </p>
  </fieldset>

  <p>
  <input type="submit" name="sauver" id="sauver" value="Sauvegarder l\'annonce">
  </p>
  </div>
  </form>
  ';
?>
}

if (isset($_FILES['photo_annonce']))
{
  if ($_FILES['photo_annonce']['error'] > 0) $erreur = "Erreur lors du transfert";
  $maxsize= 1000000;
  if ($_FILES['photo_annonce']['size'] > $maxsize) $erreur = "Le fichier est trop gros";
  $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
  //1. strrchr renvoie l'extension avec le point (« . »).
  //2. substr(chaine,1) ignore le premier caractère de chaine.
  //3. strtolower met l'extension en minuscules.
  $extension_upload = strtolower(  substr(  strrchr($_FILES['photo_annonce']['name'], '.')  ,1)  );
  if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte"; ?></br>
  <?php

  //Créer un identifiant difficile à deviner
  $nom_comp = md5(uniqid(rand(), true));

  $new_nom = "{$nom_comp}.{$extension_upload}";
  //$resultat = move_uploaded_file($_FILES['photo_annonce']['tmp_name'],$nom);
  $resultat = move_uploaded_file($_FILES['photo_annonce']['tmp_name'], 'uploads/' . $new_nom);
  if ($resultat) echo "Transfert réussi"; // On peut valider le fichier et le stocker définitivement
}


      //html5 section validator.w3.org,   <nav>
      //vérifier cé client que form rempli, message disant à quel niveau pas rempli ou erreur
//$nom_categoriep=$POST['nom_categoriep'];
//$nom_categoriea=$POST['nom_categoriea'];

if (isset($_POST['envoi']))
{
$base = mysqli_connect ('localhost', 'root', '');  //choisir mp
mysqli_select_db ($base,'mabase') ;

$codepostal=$_POST['codepostal'];
$ville=$_POST['ville'];
$region=$_POST['region'];

$nom=$_POST['nom'];
$mail=$_POST['mail'];
$tel=$_POST['tel'];

$titre=$_POST['titre'];
$photo_annonce = $new_nom;
$texte=$_POST['texte'];
$prix=$_POST['prix'];


$sql = 'INSERT INTO annonce VALUES ("","'.$codepostal.'","'.$ville.'","'.$region.'","'.$nom.'","'.$mail.'","'.$tel.'","'.$titre.'","'.$photo_annonce.'","'.$texte.'","'.$prix.'",NOW())';
    //$sql1= 'INSERT INTO categorie_produit VALUES ("","'.$nom_categoriep.'")';
    //$sql2= 'INSERT INTO categorie_a VALUES ("","'.$nom_categoriea.'")';


mysqli_query ($base,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($base)); 
    //mysqli_query ($base,$sql1) or die ('Erreur SQL !'.$sql1.'<br />'.mysqli_error($base));
    //mysqli_query ($base,$sql2) or die ('Erreur SQL !'.$sql2.'<br />'.mysqli_error($base));

        // on ferme la connexion
mysqli_close($base);
}  
?>