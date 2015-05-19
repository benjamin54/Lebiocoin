
<?php include ('includes/header.php') ?>
<?php
$base = mysqli_connect ('localhost', 'root', '');  //choisir mp
            mysqli_select_db ($base,'mabase') ;

		$sql = 'INSERT INTO annonce VALUES ("","'.$codepostal.'","'.$ville.'","'.$region.'","'.$nom.'","'.$mail.'","'.$tel.'","'.$titre.'","'.$photo_annonce.'","'.$texte.'","'.$prix.'",NOW())';

		mysqli_query ($base,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($base)); 
 
        // on ferme la connexion
    mysqli_close($base);
 ?>
<?php include('includes/footer.php') ?>