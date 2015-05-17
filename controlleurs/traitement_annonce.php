
<?php
  if (isset ($_POST['sauver']))  
  {
    //On récupère les valeurs entrées par l'utilisateur :
      if (isset($_FILES['photo_annonce']) AND $_FILES['photo_annonce']['error'] == 0)
      {
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['photo_annonce']['size'] <= 1000000)
        {
            //testons si l'extension est autorisée
            $infosimage = pathinfo($_FILES['photo_annonce']['name']);
            $extension_upload = $infosimage['extension']; 
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            if (in_array($extension_upload, $extensions_autorisees))
            {
                    // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['photo_annonce']['tmp_name'], 'uploads/' . basename($_FILES['photo_annonce']['name']));
                        echo "L'envoi a bien été effectué !";   
            }
        }
      }

    $codepostal=$_POST['codepostal'];
    $ville=$_POST['ville'];
    $region=$_POST['region'];

    $nom=$_POST['nom'];
    $mail=$_POST['mail'];
    $tel=$_POST['tel'];

    $titre=$_POST['titre'];
    $photo_annonce=$_POST['photo_annonce'];
    $texte=$_POST['texte'];
    $prix=$_POST['prix'];

		$base = mysqli_connect ('localhost', 'root', '');  
            mysqli_select_db ($base,'mabase') ;

		$sql = 'INSERT INTO annonce VALUES ("","'.$codepostal.'","'.$ville.'","'.$region.'","'.$nom.'","'.$mail.'","'.$tel.'","'.$titre.'","'.$photo_annonce.'","'.$texte.'","'.$prix.'")';

		mysqli_query ($base,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($base)); 
 
        // on ferme la connexion
    mysqli_close($base);
  }
?>