<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>  <!-- cette ligne sert à ce qu'on ai pas besoin d'ecrire le code des accents-->
  <title>Création de votre compte personnel</title>
  <link rel="stylesheet" href="formulaire.css">
</head>

<body>

    <p>Bonjour <?php echo htmlspecialchars($_POST['prenom_membre' ]), htmlspecialchars($_POST['nom_membre']); ?> </p>  <!-- méthode POST pour accéder aux variables-->

    <?php
    // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
    if (isset($_FILES['photo_profil']) AND $_FILES['photo_profil']['error'] == 0)
    {
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['photo_profil']['size'] <= 1000000)
        {
            //testons si l'extension est autorisée
            $infosimage = pathinfo($_FILES['photo_profil']['name']);
            $extension_upload = $infosimage['extension']; 
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            if (in_array($extension_upload, $extensions_autorisees))
            {
                    // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['photo_profil']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
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

    <?php //traiter une erreur de connexion à la bdd
    try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=ma_base;charset=utf8', 'root', '');   //nouvelle session
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    } 
    $requete= $bdd -> prepare('INSERT INTO `membre`(`id_membre`, `nom_membre`, `prenom_membre`, `pseudo_membre`, `photo_profil`, `date_naissance`, `adresse_mail`, `mot_de_passe`, `administrateur`)VALUES (?,?,?,?,?,?,?,?,?)');
    $requete -> execute(array($_POST['id_membre'],$_POST['nom_membre'],$_POST['prenom_membre'],$_POST['pseudo_membre'],$_POST['photo_profil'],$_POST['date_naissance'],$_POST['adresse_mail'],$_POST['mot_de_passe'],$_POST['administrateur']));
    ?> 
    
    <p><a href="formulaire.php">Retour au formulaire</a></p>  <!-- lien pour revenir au formulaire-->
</body>

</html>
