

<?php
try
{
	// On se connecte à MySQL
	$base = new PDO('mysql:host=localhost;dbname=mabase;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
//$reponse = $base->query('SELECT `id_annonce`, `codepostal`, `ville`, `region`, `nom`, `mail`, `tel`, `titre`, `photo_annonce`, `texte`, `prix`, `date_ajout` FROM annonce WHERE id_annonce>=1');
 
// On récupère tout le contenu de la table annonce
$reponse = $base->query('SELECT * FROM annonce');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
	?>
	<p>
		<strong>Annonce :</strong> : <?php echo $donnees['titre']; ?><br />
		Mise en ligne par : <?php echo $donnees['nom']; ?>, le <?php echo $donnees['date_ajout']?>, le prix est de <?php echo $donnees['prix']; ?> euros <br />
		<br />
		<?php echo $donnees['nom']; ?> a laissé ces commentaires sur <?php echo $donnees['titre']; ?> 
	</p>
	<?php
}

/*$codepostal=$sql->fetch()'codepostal';
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
*/
?>

<?php     // on ferme la connexion
   	mysqli_close($base);
   	?>

   	<?php include ('includes/header.php') ?>

   	<link rel="stylesheet" href="styles/includes/header.css">
   	<div id="annonce">

   	</div>
