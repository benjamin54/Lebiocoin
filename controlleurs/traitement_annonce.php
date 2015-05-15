
<?php
        if (isset ($_POST['sauver']))  
        {
            //On récupère les valeurs entrées par l'utilisateur :
            $prenom=$_POST['prenom'];

           $photo=$_POST['photo_annonce'];

		$base = mysqli_connect ('localhost', 'root', '');  
              mysqli_select_db ($base,'mabase') ;

		$sql = 'INSERT INTO annonce VALUES ("")';
		}
		else{
		mysqli_query ($base,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($base)); 
 
        // on ferme la connexion
        mysqli_close($base);
        }
?>