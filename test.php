<form method="post" action="">

    <legend>Connexion au Panel</legend>

    <div class="form-group">
      <label class="col-lg-2 control-label">Adresse mail</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="adressemail" placeholder="adressemail">
      </div>
    </div><br/><br/><br/>

    <div class="form-group">
      <label class="col-lg-2 control-label">Mot de passe</label>
      <div class="col-lg-10">
        <input type="motdepasse1" class="form-control" name="motdepasse1" placeholder="Mot de passe">
      </div>
    </div>

<br/><br/><center><button type="submit" name="submit" class="btn btn-primary">Connexion</button></center>
</form>
<?php
// on se connecte à MySQL 
$db = mysql_connect('localhost', 'root', ''); 
mysql_select_db('mabase',$db); 

if(isset($_POST) && !empty($_POST['adressemail']) && !empty($_POST['motdepasse1'])) {
$_POST['motdepasse1'] = hash("sha256", $_POST['motdepasse1']);
  extract($_POST);
  // on recupére le motdepasse1 de la table qui correspond au adressemail du visiteur
  $sql = "select motdepasse1 from membre where adressemail='".$adressemail."'";
  $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

  $data = mysql_fetch_assoc($req);

  if($data['motdepasse1'] != $motdepasse1) {
    echo '<div class="alert alert-dismissable alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Oh Non !</strong> Mauvais adressemail / motdepasse1. Merci de recommencer !
</div>';
  }
  
  else {
    session_start();
    $_SESSION['adressemail'] = $adressemail;
    
    echo '<div class="alert alert-dismissable alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Yes !</strong> Vous etes bien logué, Redirection dans 5 secondes ! <meta http-equiv="refresh" content="5; URL=dashboard">
</div>';
    // ici vous pouvez afficher un lien pour renvoyer
    // vers la page d'accueil de votre espace membres 
  }    
}
else {
  $champs = '<p><b>(Remplissez tous les champs pour vous connectez !)</b></p>';
}


?>