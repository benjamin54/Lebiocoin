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
$reponse = $base->query('SELECT * FROM annonce WHERE id_cat_annonce=2 ORDER BY date_ajout DESC');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
	?>
<div id="annoncecadre">
	<section id="annonce_gauche">
		<p id="titreannonce">Annonce : <?php echo htmlentities($donnees['titre']); ?></p><br />
		<p>	Mise en ligne par : <?php echo htmlentities($donnees['nom']) ?>. <br /><br/>
			<?php echo "<img src='controlleurs/uploads/".$donnees['photo_annonce']."'>"; ?> <br/><br/>  
			Description : <br/> <?php echo htmlentities($donnees['texte'])?> 
		</p>
	</section>
	<section id="annonce_droite">
		<p id="datehautdroit"><?php echo htmlentities($donnees['date_ajout']); ?></p>
		<p>Contacter : <a href="<?php 'echo htmlentities($donnees[\'mail\']);' ?>"><?php echo htmlentities($donnees['mail']); ?></a> </p>
		<p>Quantité en stock : <?php echo htmlentities($donnees['prix']); ?> kgs.</p>
		<p>Prix : <?php echo htmlentities($donnees['prix']); ?> euros/kg.</p>
	</section>
</div>
<?php
}
$reponse->closeCursor();
?>