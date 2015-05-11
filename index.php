
<?php
session_start(); //création session visiteur
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}


?>
<?php include("pagedaccueil.php"); ?>


<?php
session_destroy(); //fermer la session
?>
