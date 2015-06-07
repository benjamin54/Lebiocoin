<!DOCTYPE html>








<html>
<head>

    <meta charset="utf-8"/>
    <title>LeBiocoin</title>
    <link rel="stylesheet" href="styles/header.css">
    <?php include("header.php"); ?>

 </head>


<body>

    <div id="contenuaccueil">
        <form method="POST" action="inscriptionMod.php">
          
            <h2>INSCRIPTION</h2>
              
                <p>Veuillez remplir le formulaire ci dessous. Tous les champs sont obligatoires.</p>
              
                

                  
                    <table>
                        <tr>
                        <td><h3>Mes identifiants</h3></td>
                        </tr>
                        <tr>
                          <td align="right">
                              <label for="prenom">Prénom :</label>
                          </td>
                          <td>
                              <input type="text" placeholder="Votre prénom" id="prenom" name="prenom">
                          </td>
                        </tr>
                        <tr>
                          <td align="right">
                              <label for="nom">Nom :</label>
                          </td>
                          <td>
                              <input type="text" placeholder="Votre nom" id="nom" name="nom">
                          </td>
                        </tr> 
                        <tr>
                          <td align="right">
                              <label for="pseudo1">Pseudo :</label>
                          </td>
                          <td>
                              <input type="text" placeholder="Votre pseudo" id="pseudo1" name="pseudo">
                          </td>
                        </tr> 
                        <tr>
                          <td align="right">
                              <label for="mail">Mail :</label>
                          </td>
                          <td>
                              <input type="email" placeholder="Votre email" id="mail" name="adressemail">
                          </td>
                        </tr> 
                        <tr> 
                          <td align="right">
                              <label for="mdp1">Mot de passe :</label>
                          </td>
                          <td>
                              <input type="password" placeholder="Votre mot de passe" id="mdp1" name="motdepasse1">
                          </td>
                        </tr>
                        <tr> 
                          <td align="right">
                              <label for="mdp2">Confirmation du mot de passe :</label>
                          </td>
                          <td>
                              <input type="password" placeholder="Confirmer le mot de passe" id="mdp2" name="motdepasse2">
                          </td>
                        </tr>
                         <tr>
                         <td> <h3>Mes coordonnées de livraison</h3></td>
                         </tr>
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

                    <p>J'accepte les <a href="conditions-generales-de-vente.php">conditions d'utilisation</a> du BIOCOIN :<input type="checkbox" name="case" value="case" checked="checked"></p>
                             
                           
                              <br>

                        <CENTER><input type="submit" name="confirminscription" value=" Valider mon inscription"></CENTER>

                 


    

            
          </form>



  </div>

</body>

</html>
