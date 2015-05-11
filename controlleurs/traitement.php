<?php
// On démarre la session
$loginOK = false;  // cf Astuce

// On n'effectue les traitement qu'à la condition que
// les informations aient été effectivement postées
if ( isset($_POST) && (!empty($_POST['login'])) && (!empty($_POST['Mdp'])) ) {

  extract($_POST);  // je vous renvoie à la doc de cette fonction

  // On va chercher le mot de passe afférent à ce login
  $sql = "SELECT pseudo, age, sexe, ville, mdp FROM user WHERE login = '".addslashes($login)."'";
  $req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql);
 
  // On vérifie que l'utilisateur existe bien
  if (mysql_num_rows($req) > 0) {
     $data = mysql_fetch_assoc($req);
   
    // On vérifie que son mot de passe est correct
    if ($password == $data['mdp']) {
      $loginOK = true;
    }
  }
}

// Si le login a été validé on met les données en sessions
if ($loginOK) {
  $_SESSION['pseudo'] = $data['pseudo'];
  $_SESSION['age'] = $data['age'];
  $_SESSION['ville'] = $data['ville'];
}
else {
  echo 'Une erreur est survenue, veuillez réessayer !';
  // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
  echo '<body onLoad="alert(\'Membre non reconnu !\')">';
  // puis on le redirige vers la page d'accueil
  echo '<meta http-equiv="refresh" content="0;URL=traitement.php">';
}
?>