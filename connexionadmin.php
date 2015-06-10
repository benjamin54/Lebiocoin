    <html>
    <head>
        <?php include("header.php") ;?>
        <div id="contenuaccueil"
   
    <meta charset="utf-8"/>
  L'ADMINISTRATEUR
    </head>

    <body>
        
    <form action="connexionadmin.php" method="post"><br/>
    Pseudo: <input type="text" name="pseudoadmin" required >
    <br/><br/>
   Mot de passe: <input type="password" name="mdpadmin" required >
   <br/><br/>
    <input type="submit" value="Connexion">
    </form>

    </body>
</div>
    </html>

        <?php
    
$bdd= new PDO('mysql:host=127.0.0.1;dbname=mabase','root','');
    $pseudov = "admin";
    $mdpv = "luxurio";

    
    if (isset($_POST['pseudoadmin']) && isset($_POST['mdpadmin'])) {

        // on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
        if ($pseudov== $_POST['pseudoadmin'] && $mdpv== $_POST['mdpadmin']) {
            // dans ce cas, tout est ok, on peut démarrer notre session

            // on la démarre :)
            session_start ();
         
            $_SESSION['pseudoadmin'] = $_POST['pseudoadmin'];
            $_SESSION['mdpadmin'] = $_POST['mdpadmin'];


            // on redirige notre visiteur vers une page de notre section administrateur
            header ('location: indexe.php');
        
       }
        else {
            // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
            echo "Mauvais pseudo ou mot de passe!";
       
 

}

}



    ?>