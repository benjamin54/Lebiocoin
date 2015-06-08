<?php try{ 
    $bdd= new PDO('mysql:host=127.0.0.1;dbname=mabase','root','');
    }
    catch(Exception $e) {
      die('Erreur: '.$e->getMessage());
    }
$bdd->query('DELETE FROM annonce WHERE id_annonce='.$_GET['delete'].'');


    $request=$bdd->query('SELECT * FROM annonce ORDER BY id_annonce');

    ?>