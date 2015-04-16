<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>  <!-- cette ligne sert à ce qu'on ai pas besoin d'ecrire le code des accents-->
  <title>Création de votre compte personnel</title>
  <link rel="stylesheet" href="formulaire.css">
</head>

<body>

    <p>Bonjour <?php echo htmlspecialchars($_POST['prenom' ]), htmlspecialchars($_POST['nom']); ?> </p>  <!-- méthode POST pour accéder aux variables-->

    <?php
    // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
    if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0)
    {
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['image']['size'] <= 1000000)
        {
            //testons si l'extension est autorisée
            $infosimage = pathinfo($_FILES['image']['name']);
            $extension_upload = $infosimage['extension']; 
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            if (in_array($extension_upload, $extensions_autorisees))
            {
                    // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                        echo "L'envoi a bien été effectué !";   
            }
        }
    }
    
    //Testons si la case de la charte a étée cochée
    if (isset($_POST['conditions']))  //si la case conditions d'utilisation a étée cochée..
    {
        echo '<p>Vous avez accepté les conditions d\'utilisation </p>';  //renvoi texte
    }
    else
    {
        echo '<p>veuillez accepter les conditions d\'utilisations </p>';
    }
    ?>
    
    <p><a href="formulaire.php">Retour au formulaire</a></p>  <!-- lien pour revenir au formulaire-->
</body>

</html>
