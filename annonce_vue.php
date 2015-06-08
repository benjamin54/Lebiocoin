<?php include ('headermembre.php') ?>

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

// On récupère tout le contenu de la table annonce par date + recente
$reponse = $base->query('SELECT * FROM annonce WHERE date_ajout IS NOT NULL ORDER BY date_ajout DESC'); //annonces triées par date la plus récente

//d'abord selec legumes/fruits, puis localité et achat/echange
//toutes annonces où la ville est Paris et offres d'achat, tri plus récent
//$reponse = $base->query('SELECT * FROM annonce WHERE id_cat_produit = 1 AND ville = PARIS AND id_cat_annonce =1 ORDER BY date_ajout DESC ');



// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
	?>
<div id="annoncecadre">
	<section id="annonce_gauche">
		<p id="titreannonce">Annonce : <?php echo htmlentities($donnees['titre']); ?></p>
		<p id="datehautgauche"><?php echo htmlentities($donnees['date_ajout']); ?></p>
		<p>	Mise en ligne par : <?php echo htmlentities($donnees['nom']) ?>. <br />
			<?php echo htmlentities($donnees['variete']) ?> <br/>
			<?php echo "<img src='controlleurs/uploads/".$donnees['photo_annonce']."'srcset=\"controlleurs/uploads/".$donnees['photo_annonce']." 1x,
             controlleurs/uploads/".$donnees['photo_annonce']." 320w 1x,
             controlleurs/uploads/".$donnees['photo_annonce']." 320w 2x\"  width=\"300\" height=\"300\" onmouseover=\"this.width=400; this.heigth=400;\" onmouseout =\"this.width=300; this.heigth=300;\"alt=\"\">"; ?> <br/><br/>  
			Description : <br/> <?php echo htmlentities($donnees['texte'])?> 
		</p>
	</section>
	<section id="annonce_droite">
		<p><?php echo htmlentities($donnees['codepostal']); ?></p>
		<p><?php echo htmlentities($donnees['ville']); ?></p>
		<p>Contacter : <a href="<?php 'echo htmlentities($donnees[\'mail\']);' ?>"><?php echo htmlentities($donnees['mail']); ?></a> </p>
		<p><?php echo htmlentities($donnees['tel']); ?> </p>
		<p>Stock : <?php echo htmlentities($donnees['quantite']); ?> kgs.</p>
		<p>Prix : <?php echo htmlentities($donnees['prix']); ?> euros/kg.</p>
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
