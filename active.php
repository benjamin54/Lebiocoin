<!DOCTYPE html> 

<html>
<head>

    <meta charset="utf-8"/>
    </head>

<body>
<?php

if(isset($_GET['id_membre'])&&isset($_GET['code']))
{

$id_membre = $_GET['id_membre'];
$code = $_GET['code'];

	$base = mysqli_connect('localhost','root','');
	mysqli_select_db($base,'mabase');
	$query = mysqli_query($base,"SELECT * FROM membre WHERE id_membre='$id_membre' AND token='$code'");

	$rows = mysqli_num_rows($query);
	if($rows==1)
	{
		$act = mysqli_query($base,"UPDATE membre SET active='1' WHERE id_membre='$id_membre'");
		die("Votre compte a été activé vous pouvez vous <a href='http://localhost/Lebiocoin/pagedaccueil.php'/>connecter</a>");	

	} else { 
		echo"id ou token invalide";
	}
} else {
	echo"informations introuvables";
}
?>
</body>

</hmtl>