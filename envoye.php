<!DOCTYPE html> 

<html>
<head>

    <meta charset="utf-8"/>
    <title>LeBiocoin</title>
    <link rel="stylesheet" href="styles/header.css">
    <?php include("header.php"); ?>
</head>

 



  <div id="contenuaccueil">
   
    Votre mot de passe vous a été envoyé à l'adresse mail : <b>  <?php echo $_POST['adressemail']; ?> </b>

  <p>Si vous vous êtes trompé dans l'adresse mail veuillez  <a href ="mdpoublie.php">recommencer </a></p>
  </div>

</body>

</html> 