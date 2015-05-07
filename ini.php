
<?php
session_start(); //création session visiteur
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}

session_destroy(); //fremer la session
?>
