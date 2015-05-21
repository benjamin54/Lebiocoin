
<?php include ('includes/header.php') ?>
<?php
$base = mysqli_connect ('localhost', 'root', '');  //choisir mp
mysqli_select_db ($base,'mabase') ;

$sql = 'SELECT `id_annonce`, `codepostal`, `ville`, `region`, `nom`, `mail`, `tel`, `titre`, `photo_annonce`, `texte`, `prix`, `date_ajout` FROM `annonce` WHERE date_ajout>=DAY';

mysqli_query ($base,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($base)); 

        // on ferme la connexion
mysqli_close($base);
?><p></p>
<?php include('includes/footer.php') ?>