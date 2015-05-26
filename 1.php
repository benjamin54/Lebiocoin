<?php 
		if (!preg_match("#^[A-Za-z éèçàù]{2,}$#",$_POST['nom']))
{
	echo "pas bon";
	echo $_POST['nom'];
} 
		if (!preg_match("#^[A-Za-z éèçàù]{2,}$#",$_POST['prenom']))
{

}
		if (!preg_match("#^[a-z0-9]+@[a-z]{2,}\.[a-z]{2,5}$#",$_POST['adressemail']))
{
echo ("mauvaise adresse");
}
?>