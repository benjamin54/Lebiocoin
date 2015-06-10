<?php session_start();
?>

<html>
	
	<body>
		<?php
			session_destroy();
			setcookie("lastconnexion",date('D,d M Y h:i:s'),time()+60);
			
			echo "vous etes deconnecte";
			
			header('Location: pagedaccueil.php');
		?>
		
	</body>
</html>