<!DOCTYPE html> 

<html>
<head>

    <meta charset="utf-8"/>
    <title>LeBiocoin</title>
    <link rel="stylesheet" href="styles/header.css">
    <?php include("header.php"); ?>
</head>

<body>
    
</body>

</html> 

<?php 

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

try {
    $bdd = new PDO('mysql:host=localhost;dbname=mabase', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" ));
} 
catch (PDOException $e) {
    echo "Erreur ! ";
    die();
}

  

  if(isset($_POST['confirminscription']))
  {
      $prenom = htmlspecialchars($_POST['prenom']);
      $nom = htmlspecialchars($_POST['nom']);
      $pseudo = htmlspecialchars($_POST['pseudo']);
      $adressemail = htmlspecialchars($_POST['adressemail']);
      $motdepasse1 = sha1($_POST['motdepasse1']);
      $motdepasse2 = sha1($_POST['motdepasse2']);
      $num = htmlspecialchars($_POST['num']);
      $region = htmlspecialchars($_POST['region']);
      $ville = htmlspecialchars($_POST['ville']);
     

$insertmembre = $bdd -> prepare("INSERT INTO membre (prenom, nom, pseudo, adressemail, motdepasse1, motdepasse2, num, region, ville) VALUES (:prenom, :nom, :pseudo, :adressemail, :motdepasse1, :motdepasse2, :num, :region, :ville)"); 
/* INSERT INTO est une fonction sql et il ne faut pas oublier de la preparer en mettant le prepare*/                                        
$insertmembre -> execute(array('prenom' => $prenom,
									  'nom' => $nom,
									   'pseudo' => $pseudo,
									   'adressemail' => $adressemail,
									   'motdepasse1' => $motdepasse1,
									   'motdepasse2' => $motdepasse2, 
									    'num' => $num,
									    'region' => $region,
									    'ville' => $ville,
									    ));
                                             

  }

?>

