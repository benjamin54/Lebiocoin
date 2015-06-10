<h2>Connexion au site</h2>

<div class="form_connexion">
<form action="" method="post">
	<?= isset($erreur['form']) ? $erreur['form'] : ''; ?>
	<p>		
		<label for="pseudo"><b>Pseudo :</b></label>
		<input type="text" name="pseudo" id="pseudo">
		<?= isset($erreur['pseudo']) ? $erreur['pseudo'] : ''; ?>
	</p>
	<p>
		<label for="pass"><b>Mot de passe :</b></label>
		<input type="password" name="pass" id="pass">
		<?= isset($erreur['pass']) ? $erreur['pass'] : ''; ?>
	<p/>
	<input type="submit" value="Se connecter" onClick="criteres();">			
</form>
</div>
<!-- <p><a href="#"> Mot de passe oublié ?</a></p> -->	