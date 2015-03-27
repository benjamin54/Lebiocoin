<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>  <!-- cette ligne sert à ce qu'on ai pas besoin d'ecrire le code des accents-->
  <title>Création de votre compte personnel</title>
  <link rel="stylesheet" href="formulaire.css">
</head>

<body>

    <p>Bonjour <?php echo $_POST['prenom'], $_POST['nom']; ?> </p>

    <?php
    if (isset($_POST['conditions']))
    {
        echo '<p>Vous avez accepté les conditions d\'utilisation </p>';
    }
    else
    {
        echo '<p>veuillez accepter les conditions d\'utilisations </p>';
    }
    ?>

</body>

</html>
