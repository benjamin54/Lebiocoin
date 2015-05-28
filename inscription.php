<!DOCTYPE html>

<?php

$bdd = new PDO ('mysql:host=127.0.0.1;dbname=mabase','root','');

  

  if(isset($_POST['forminscription']))
  {
     $prenom = htmlspecialchars($_POST['prenom']);
      $nom = htmlspecialchars($_POST['nom']);
      $pseudo = htmlspecialchars($_POST['pseudo']);
      $adressemail = htmlspecialchars($_POST['adressemail']);
      $motdepasse1 = sha1($_POST['motdepasse1']);
      $motdepasse2 = sha1($_POST['motdepasse2']);
      $region = htmlspecialchars($_POST['region']);
      $ville = htmlspecialchars($_POST['ville']);
      $case = htmlspecialchars($_POST['case']);

      if(!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['pseudo']) AND !empty($_POST['adressemail']) AND !empty($_POST['motdepasse1']) AND !empty($_POST['motdepasse2']) AND 
      !empty($_POST['num']) AND !empty($_POST['region']) AND !empty($_POST['ville']) AND !empty($_POST['case']))
      {

          $reqpseudo = $bdd -> prepare("SELECT * FROM membre WHERE pseudo = ?");
          $reqpseudo -> execute(array($pseudo));
          $pseudoexist = $reqpseudo -> rowCount('');

              if($pseudoexist == 0)
              {

                 $motdepasse1length = strlen($motdepasse1);
                  if($motdepasse1length >= 8)
                  {
                        if($motdepasse1 == $motdepasse2)
                        {
                                  if(filter_var($motdepasse1, FILTER_VALIDATE_EMAIL))
                                  {

                                        $reqmail = $bdd -> prepare("SELECT * FROM membre WHERE adressemail = ?"); /* requete qui permet des sélectionner toutes les entrées de la table membre ou le mail 
                                        etait egal au mail que l'utilisateur a enregistré, et donc ca permet de verifier si le mail existe deja*/
                                        $reqmail -> execute(array($adressemail));
                                        $mailexist = $reqmail -> rowCount(''); /* rowCount compte le nombre de colonnes qui existe pour ce qu'on a rentré avant*/
                                    
                                            if($mailexist == 0)
                                            {

                                              $insertmembre = $bdd -> prepare("INSERT INTO membre (prenom, nom, pseudo, adressemail, motdepasse1, motdepasse2, num, region, ville, case) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"); 
                                            /* INSERT INTO est une fonction sql et il ne faut pas oublier de la preparer en mettant le prepare*/                                        
                                              $insertmembre -> execute(array($prenom, $nom, $pseudo, $adressemail, $motdepasse1, $num, $region, $ville, $case));
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

?>














<html>
<head>

    <meta charset="utf-8"/>
    <title>LeBiocoin</title>
    <link rel="stylesheet" href="styles/header.css">
    <?php include("header.php"); ?>

 </head>


<body>

    <div id="contenuaccueil">
        <form method="POST" action="">
          
            <h2>INSCRIPTION</h2>
              
                <p>Veuillez remplir le formulaire ci dessous. Les champs <p2 style="color:red">*</p2> sont obligatoires.</p>
              
                <h3>Mes identifiants</h3>

                  
                    <table>
                        <tr>
                          <td align="right">
                              <label for="prenom">Prénom :</label>
                          </td>
                          <td>
                              <input type="text" placeholder="Votre prénom" id="prenom" name="prenom" >
                          </td>
                        </tr>
                        <tr>
                          <td align="right">
                              <label for="nom">Nom :</label>
                          </td>
                          <td>
                              <input type="text" placeholder="Votre nom" id="nom" name="nom" >
                          </td>
                        </tr> 
                        <tr>
                          <td align="right">
                              <label for="pseudo">Pseudo :</label>
                          </td>
                          <td>
                              <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" >
                          </td>
                        </tr> 
                          <td align="right">
                              <label for="mail">Mail :</label>
                          </td>
                          <td>
                              <input type="email" placeholder="Votre email" id="mail" name="adressemail">
                          </td>
                        </tr>  
                          <td align="right">
                              <label for="mdp">Mot de passe :</label>
                          </td>
                          <td>
                              <input type="password" placeholder="Votre mot de passe" id="mdp" name="motdepasse1">
                          </td>
                         </tr> 
                          <td align="right">
                              <label for="mdp2">Confirmation du mot de passe :</label>
                          </td>
                          <td>
                              <input type="password" placeholder="Confirmer le mot de passe" id="mdp2" name="motdepasse2">
                          </td>
                        </tr>
                    </table>
                 

              <br>                

                  <h3>Mes coordonées de livraison</h3>
                    
               
                      <table>
                        <tr>
                          <td align="right">
                              <label for="numero">Votre numéro de téléphone :</label>
                          </td>
                          <td>
                              <input type="text" placeholder="Votre numéro de téléphone" id="numero" name="num">
                          </td>
                        </tr>  
                          <td align="right">
                              <label for="region">Région :</label>
                          </td>
                          <td>
                              <input type="text" placeholder="Choisissez votre région" id="region" name="region">
                          </td>
                        </tr>
                          <td align="right">
                              <label for="ville">Ville :</label>
                          </td>
                          <td>
                              <input type="text" placeholder="Votre Ville" id="ville" name="ville">
                          </td>
                        </tr>
                      </table>

                    <br>

                    <p>J'accepte les conditions d'utilisation du BIOCOIN :<input type="checkbox" name="case" value="case"></p>
                                    
                              <p>"Je suis âgé(e) d'au moins 18 ans."</p>
                          
                              <p>"La transaction se fait en main propre, car le site a pour vocation de créer du lien localement."</p>
                           
                              <br>

                        <CENTER><input type="submit" name="valider"  name="confirminscription" value=" Valider mon inscription"></CENTER>

                 


    <?php
      if(isset($erreur))
      {
        echo '<font-color="red">' .$erreur. "</font>";
      }
      if(isset($message))
      {
        echo '<font-color="blue">' .$message. "</font>";
      }
    ?>

            
          </form>



        

<!--
                 
              
                
  
        if (strlen($_POST['motdepasse1'])<8 ){
  //header('Location: do.php'); 
              echo"Le mot de passe doit contenir 8 caractères!";
        }
        else {
              echo "Veuillez remplir tous les champs"; 
        }


        
                  
          $base = mysqli_connect ('localhost', 'root', '');  
              mysqli_select_db ($base,'mabase') ;
 
            //On prépare la commande sql d'insertion
      
          $sql = 'INSERT INTO membre VALUES ("","'.$prenom.'","'.$nom.'","'.$adressemail.'", "'.$motdepasse1.'",   "'.$motdepasse2.'",     "'.$ville.'",   "'.$num.'",  "'.$photo.'","'.$case.'")'; 
              //"'.$adressemail.'", "'.$motdepasse1.'", "'.$motdepasse2.'", "'.$adresse.'",   "'.$codepostal.'", "'.$ville.'","'.$choix.'","'.$num.'")'; 
 
            /*on lance la commande (mysql_query) et au cas où, 
            on rédige un petit message d'erreur si la requête ne passe pas (or die) 
            (Message qui intègrera les causes d'erreur sql)*/
            mysqli_query ($base,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($base)); 
 
            // on ferme la connexion
            mysqli_close($base);
        }
        
        ?>

      -->
  </div>

</body>

</html>
