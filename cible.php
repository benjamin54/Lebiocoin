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
