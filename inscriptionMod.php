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

  

  if(isset($_POST['forminscription']))
  {
      $id_membre = htmlspecialchars($_POST['id_membre']);
      $prenom = htmlspecialchars($_POST['prenom']);
      $nom = htmlspecialchars($_POST['nom']);
      $pseudo = htmlspecialchars($_POST['pseudo']);
      $adressemail = htmlspecialchars($_POST['adressemail']);
      $motdepasse1 = sha1($_POST['motdepasse1']);
      $motdepasse2 = sha1($_POST['motdepasse2']);
      $num = htmlspecialchars($_POST['num']);
      $region = htmlspecialchars($_POST['region']);
      $ville = htmlspecialchars($_POST['ville']);
      $case = htmlspecialchars($_POST['case']);

$insertmembre = $bdd -> prepare("INSERT INTO membre (prenom, nom, pseudo, adressemail, motdepasse1, motdepasse2, num, region, ville, case) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"); 
                                            /* INSERT INTO est une fonction sql et il ne faut pas oublier de la preparer en mettant le prepare*/                                        
                                              $insertmembre = $bdd -> execute(array($prenom, $nom, $pseudo, $adressemail, $motdepasse1, $motdepasse2, $num, $region, $ville, $case));
                                              $message = "Votre compte a bien été créé. Bienvenue !";

  }

?>