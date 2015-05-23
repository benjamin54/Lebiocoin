

<?php
$base = mysqli_connect ('localhost', 'root', '');  //choisir mp
mysqli_select_db ($base,'mabase') ;

$reponse = $base->query('SELECT `id_annonce`, `codepostal`, `ville`, `region`, `nom`, `mail`, `tel`, `titre`, `photo_annonce`, `texte`, `prix`, `date_ajout` FROM annonce WHERE id_annonce>=1');

mysqli_query ($base,$reponse) or die ('Erreur SQL !'.$reponse.'<br />'.mysqli_error($base)); 
	
while ($donnees = $reponse->fetch())
{
	<p>
		
	</p>
}
	$codepostal=$sql->fetch()'codepostal';
	$ville='ville';
	$region='region';
	$nom='nom';
	$mail='mail';
	$tel='tel';
	$titre='titre';
	$photo_annonce='photo_annonce';
	$texte='texte';
	$prix='prix';
	$date_ajout='date_ajout';
        // on ferme la connexion
mysqli_close($base);
?>

<?php include ('includes/header.php') ?>
	
	<link rel="stylesheet" href="styles/includes/header.css">
<div id="annonce">

</div>


