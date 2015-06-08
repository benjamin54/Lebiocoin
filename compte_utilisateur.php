<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>  <!-- cette ligne sert à ce qu'on ai pas besoin d'ecrire le code des accents-->
    <link rel="stylesheet" href="styles/compte_utilisateur.css">
  <title>LeBioCoin - Votre compte personnel</title>
</head>

<body>

    <?php include('headermembre.php');?>

    <div id="profil_util">

	       <fieldset>
                <legend>
                    <b>Mon profil</b>
                </legend>
                <img src="Images/photo_profil_defaut.png" alt="photo de profil" id="photo_profil">  
                
                <div id="noms">
                    <p> Dupont </p>
                    <p> Jean</p>
                </div>

                <p> 20/05/1990</p>
                <p> jean@mail.com</p>
                <p> Paris</p>
                <p> Ile de France</p>
                
                <div id="modif_profil">
                    <a href=('#')> Modifier profil</a>
                </div>

            </fieldset>

            <fieldset>
                <legend>
                    <b>Dernières actions : </b>
                </legend>
        
                <p> Achat : </p>
                <p> Vente : </p>
    
            </fieldset>

    </div>

</body>

</html>
