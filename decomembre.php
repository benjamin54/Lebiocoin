<?php
session_start();
$_SESSION=array(); // vider les variables de session
session_destroy();
header('Location:pagedaccueil.php');
?>