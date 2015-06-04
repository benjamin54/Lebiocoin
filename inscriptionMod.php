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
     
$token = rand('123','321');
$active = '0';


 if(!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['pseudo']) AND !empty($_POST['adressemail']) AND !empty($_POST['motdepasse1']) AND !empty($_POST['motdepasse2']) AND 
      !empty($_POST['num']) AND !empty($_POST['region']) AND !empty($_POST['ville']))
      {

          $pseudo = $_POST['pseudo'];
          $reqpseudo = $bdd -> prepare("SELECT * FROM membre WHERE pseudo = ".$pseudo."");
          $pseudoexist = $reqpseudo -> rowCount('');

              if($pseudoexist == 0)
              {
                $motdepasse1 = $_POST['motdepasse1'];
                $motdepasse2 = $_POST['motdepasse2'];
                 $motdepasse1length = strlen($motdepasse1);
                  if($motdepasse1length >= 1)
                  {
                        if($motdepasse1 == $motdepasse2)
                        {
                                  if(filter_var($adressemail, FILTER_VALIDATE_EMAIL))
                                  {
                                        $adressemail = $_POST['adressemail'];
                                        $reqmail = $bdd -> prepare("SELECT * FROM membre WHERE adressemail = ?"); /* requete qui permet des sélectionner toutes les entrées de la table membre ou le mail 
                                        etait egal au mail que l'utilisateur a enregistré, et donc ca permet de verifier si le mail existe deja*/
                                        $reqmail -> execute(array($adressemail));
                                        $mailexist = $reqmail -> rowCount(''); /* rowCount compte le nombre de colonnes qui existe pour ce qu'on a rentré avant*/
                                    
                                            if($mailexist == 0)
                                            {
                                            

                                              $insertmembre = $bdd -> prepare("INSERT INTO membre (prenom, nom, pseudo, adressemail, token, active, motdepasse1, motdepasse2, num, region, ville) VALUES (:prenom, :nom, :pseudo, :adressemail, :token, :active, :motdepasse1, :motdepasse2, :num, :region, :ville)"); 
                                              /* INSERT INTO est une fonction sql et il ne faut pas oublier de la preparer en mettant le prepare*/                                        
                                              $insertmembre -> execute(array('prenom' => $prenom,
                                              									             'nom' => $nom,
                                              									             'pseudo' => $pseudo,
                                              									             'adressemail' => $adressemail,
                                              									             'motdepasse1' => $motdepasse1,
                                                        									   'motdepasse2' => $motdepasse2,
                                                                             'token' => $token,
                                                                             'active' => $active,
                                                        									   'num' => $num,
                                                        									   'region' => $region,
                                                        									   'ville' => $ville,
                                                        									    ));
                                             
                                            $message = "Votre compte a bien été créé. Bienvenue !";
                                            
                                            }

                                            else 
                                            {
                                              $erreur = "Adresse email déjà utilisée !";
                                            }

                                  }

                                  else
                                  {
                                    $erreur = "Votre email n'est pas valide !";
                                  } 
                        }


                        else
                        {
                          $erreur = "Vos mots de passe ne correspondent pas !";
                        }
                  }

                  else
                  {
                    $erreur = "Le mot de passe doit contenir au minimum 8 caractères !";
                  }
              }

              else
              {
                $erreur = "Votre pseudo a déjà été utilisé !";
              }


      }

      else 
      {
        $erreur = "Tous les champs doivent être complétés !";
      }


  }

      if(isset($erreur))
      {
        echo "<div id=\"positionerreur\"><h4>$erreur</h4></div>";
      }
      if(isset($message))
      {
        echo "<h4>$message</h4>";
      }

?>

