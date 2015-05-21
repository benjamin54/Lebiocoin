
<?php
 function error ($nom) {
  global $errors;
  echo (isset($errors[$nom]) ? $errors[$nom] : '');
}
  // Définition de quelques fonctions
  function message ($message, $type = null) {
    $color = $type === 'error' ? '#ff0000' : '#1E824c';
    return '<div style="font-size:16px;color:' . $color . ';">' . $message . '</div>';
  }

  function verif ($motif, $nom, $cle) {
    global $form;
    global $errors;
    $valeur = isset($_POST[$cle]) ? $_POST[$cle] : null;
    if (!empty($valeur)) {
      $valeur = htmlspecialchars($valeur);
      if (preg_match($motif, $valeur)) {
        $form[$cle] = $valeur;
      } else {
        $errors[$cle] = message('Le champ ' . $nom . ' ' . $valeur . ' n\'est pas valide.', 'error');
      }
    } else {
      $errors[$cle] = message('Le champ ' . $nom . ' doit être rempli.', 'error');
    }
  }
 if(!empty($_POST))
    {
    // Contient les données vérifiées du formulaire
    $form = array();
    // Contient les erreurs du formulaire
    $errors = array();
    // Verification des données enregistrées par l'utilisateur
      verif("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", 'Email', 'email');
      verif("#^[a-zàéèëïÖü -]+$#i", 'Nom', 'name');
      verif("#^.+$#s", "Message", 'message');
      $form['sujet'] = $_POST['sujet'];
       if (empty($errors)) {
        // Envoi données dans la bdd
        $req = $db->prepare('INSERT INTO Support (email, nom, sujet, msg, date_msg) VALUES (:email, :name, :sujet, :message, NOW())');
        try {
               $req->execute($form);
                } catch (Exception $e) {
        die("Erreur:". $e->getMessage());
      } 
        $res = $db->lastInsertId();
        if($res) {
          echo '<script>confirm("Votre message a bien été envoyé.")</script>';
        }
     }
    }
    ?>

    <?php include("header.php"); ?>
    <link rel="stylesheet" href="styles/accueil.css">
        <div> 
      		<div id="cadre_contact">
       			<article id="contact">
       				<form class="ctc" method="post" action="">

       				<legend>Contactez nous</legend>
       				<label class="titre_contact" for="name">Nom</label>
       				<input type="text" name="name" id="name" class="contact_input" value="<?= (isset($_POST['name']) ? $_POST['name'] : ''); ?>" required/><br>
              <?php error('name'); ?>
              <label for="email" class="titre_contact" style='margin-right: -15px;'>Email</label>
              <input type="email" name="email" id="email" class="contact_input" value="<?= (isset($_POST['email']) ? $_POST['email'] : ''); ?>" required /><br>
              <?php error('email'); ?>
							<label  class="titre_contact" for="sujet">Sujet</label>
       				<select name="sujet" id="sujet" class="contact_sujet" value="<?= (isset($_POST['sujet']) ? $_POST['sujet'] : ''); ?>" ><br>
          			<option value="problèmes de comptes">Problèmes de compte</option>
           			<option value="suggestion">Suggestion</option>
           			<option value="détails pratique">Détails pratiques</option>
           			<option value="réclamations">Réclamations</option>
           			<option value="autre">Autre</option>
        			</select> 
              <?php error('sujet'); ?>
              </br>  
        			<textarea id="message" name="message" class="contact_message" placeholder="Votre message"></textarea>
              <?php error('message'); ?>
              </br>	
						 	<input type="submit" value="Envoyer" id="envoyer">
						  
					</form>	
				</article>		
      </div>
   </div>  

