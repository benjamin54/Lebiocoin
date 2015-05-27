<?php include ('header.php') ?>

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
		<div id="annoncecadre">
		<section id="annonce_gauche">
			<p>
				<strong>Annonce :</strong> <?php echo htmlentities($donnees['titre']); ?><br />
				Mise en ligne par : <?php echo htmlentities($donnees['nom']) ?>. le <?php echo htmlentities($donnees['date_ajout']);?>,  <br />
				<?php echo "<img src='controlleurs/uploads/".$donnees['photo_annonce']."'>"; ?> <br/>  
				Description : <br/> <?php echo htmlentities($donnees['texte'])?> 
			</p>
					<p id="annonce_droite">
				Prix : <?php echo htmlentities($donnees['prix']); ?> euros/kg.
			</p>
		</section>
		</div>
		<?php
	}
$reponse->closeCursor(); // Termine le traitement de la requête
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
