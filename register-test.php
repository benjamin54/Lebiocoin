<!DOCTYPE html>
<html>


<form method="post" action="">

    <legend>S'inscrire sur le site</legend>

    <div class="form-group">
      <label class="col-lg-2 control-label">Login</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="login" placeholder="Login">
      </div>
    </div><br/><br/><br/>

    <div class="form-group">
      <label class="col-lg-2 control-label">Mot de passe</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password" placeholder="Mot de passe">
      </div>
    </div>

<br/><br/><center><button type="submit" name="submit" class="btn btn-primary">S'Inscrire</button></center>
</form>
</html>
<?php
//Connexion à la BDD
  try
  {
   $bdd = new PDO ('mysql:host=localhost;dbname=bdd','root', '');
  
  }
  
  catch(Exception $e)
  {
   die('Erreur :'.$e->getMessage());
  }
  
    if(ISSET($_POST['submit']))
{


//On crée les variables
$login =   $_POST['login'];
$password = $_POST['password'];
$password = hash("sha256", $password);




$req = $bdd->prepare('INSERT INTO membre(login, password) VALUES (:login, :password)');


$req->execute(array("login" => $login, "password" => $password));


if(!empty($login) && !empty($password))
{


}else{
?>


<b>Pseudo ou MDP vide !</b>


<?php
}


if(empty($login) && empty($password))
{

 $message = "problem";}
else{


session_start();
$_SESSION['login'] = $_POST['login'];
header('Location:Lebiocoin');


}


}
   
   ?>