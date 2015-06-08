<?php include ('header.php') ?> 

<!DOCTYPE html>
<html>
<body>
  <div id="annonce">
    <h4>Recherche avancée</h4>

    <p>
      <font>Veuillez remplir le formulaire ci dessous.</font>
    </p>

    <form method="POST" action="controlleurs/traitement_annonce.php" onSubmit="return verif_formulaire()" enctype="multipart/form-data">

      <fieldset>
        

        <!--<p>
          <label for="nom_categoriep">Catégorie:</label>
          <select name="nom_categoriep" id="nom_categoriep">
            <option value="fruit">Fruits</option>
            <option value="legume">Légumes</option>
          </select>
          <p2 style="color:red"> *</p2>
        </p>
        -->

        <p>
          <label for="nom_categoriea">Type d'annonce:</label> 
          <input type="radio" name="nom_categoriea" value="achat" id="nom_categoriea" checked/> Achat
          <input type="radio" name="nom_categoriea" value="echange" /> Echange
          
        </p>
      </fieldset>

      <fieldset>
      
        <p>
          <label for="region">D&eacutepartement/R&eacutegion de votre choix:</label>
          <select name="region" id="region"> 

            <option value="Alsace" selected>Alsace</option>

            <option value="Aquitaine">Aquitaine</option>

            <option value="Auvergne">Auvergne</option>

            <option value="Base Normandie">Basse Normandie</option>

            <option value="Bourgogne">Bourgogne</option>

            <option value="Bretagne">Bretagne</option>

            <option value="Centre">Centre</option>

            <option value="Champagne-Ardenne">Champagne-Ardenne</option>

            <option value="Corse">Corse</option>

            <option value="Franche-Comté">Franche-Comté</option>

            <option value="Haute normandie">Haute normandie</option>

            <option value="Ile de France">Ile de France</option>

            <option value="Languedoc Roussilon">Languedoc Roussilon</option>

            <option value="Limousin">Limousin</option>

            <option value="Loraine">Loraine</option>

            <option value="Midi-Pyrénées">Midi-Pyrénées</option>

            <option value="Nord pas de Calais">Nord pas de Calais</option>

            <option value="Pays de la Loire">Pays de la Loire</option>

            <option value="Picardie">Picardie</option>

            <option value="Poitou Charente">Poitou Charente</option>

            <option value="Provence Alpes Cote d'Azur">Provence Alpes Cote d'Azur</option>

            <option value="Rhône-Alpes">Rhône-Alpes</option>
          </select>
        </p>
      </fieldset>

      

      <fieldset>
        <legend>Sélectionner votre fruit </legend>
       
        <p>
        <label for="fruit a coque">Fruits à coque :</label>
          <select name="fruit a coque" id="fruit a coque">

            <option value="noix de coco" selected>Noix de coco</option>

            <option value="chataigne">Châtaigne</option>

            <option value="amande">Amande</option>

            <option value="noix">Noix</option>

            <option value="Pignons de pin">Pignons de pin</option>
            </select>
            </p>

             <p>
        <label for="agrumes">Agrumes :</label>
          <select name="agrumes" id="agrumes">

            <option value="orange" selected>Orange</option>

            <option value="pomelo">Pomelo</option>

            <option value="citron">Citron</option>

            <option value="citron vert">Citron vert</option>

            <option value="clementine">Clémentine</option>

            <option value="mandarine">Mandarine</option>
            </select>
            </p>

            <p>
        <label for="fruits a noyaux">Fruits à noyaux :</label>
          <select name="fruits a noyaux" id="fruits a noyaux">

            <option value="cerise" selected>Cerise</option>

            <option value="abricot">Abricot</option>

            <option value="mirabelle">Mirabelle</option>

            <option value="pêche">Pêche</option>

            <option value="nectarine">Nectarine</option>
            
            <option value="prune">Prune</option>
            </select>
            </p>

            <p>
        <label for="Fruits à pépins">Fruits à pépins :</label>
          <select name="Fruits à pépins" id="Fruits à pépins">

            <option value="pomme" selected>Pomme</option>

            <option value="poire">Poire</option>

            <option value="coing">Coing</option>
            </select>
            </p>

            <p>
        <label for="Fruits de plantes grimpantes">Fruits de plantes grimpantes :</label>
          <select name="Fruits de plantes grimpantes" id="Fruits de plantes grimpantes">

            <option value="kiwi" selected>Kiwi</option>

            <option value="raisin">Raisins</option>
            </select>
            </p>

            <p>
        <label for="Fruit exotique et tropicaux">Fruits exotiques et tropicaux :</label>
          <select name="Fruit exotique et tropicaux" id="Fruit exotique et tropicaux">

            <option value="grenade" selected>Grenade</option>

            <option value="Litchi">Litchi</option>

            <option value="fruit de la passion">Fruit de la passion</option>

            <option value="goyave ">Goyave</option>

            <option value="mangue">Mangue</option>
            
            <option value="carambole">Carambole</option>
            <option value="papaye" selected>Papaye</option>

            <option value="ananas">Ananas</option>

            <option value="avocat">Avocat</option>

            <option value="kaki">Kaki</option>

            <option value="figue de barbarie">Figue de barbarie</option>
            
            <option value="datte">Datte</option>
            <option value="banane" selected>Banane</option>

            <option value="physalis">Physalis</option>

            <option value="mangoustan">Mangoustan</option>

            <option value="anone">Anone</option>

            <option value="sapotille">Sapotille</option>
            
            
            </select>
            </p>

            <p>
        <label for="Fruits sauvages">Fruits sauvages :</label>
          <select name="Fruits sauvages" id="Fruits sauvages">

            <option value="noisette" selected>Noisette</option>

            <option value="figue">Figue</option>

            
            </select>
            </p>
        

             <p>
        <label for="Légumes fruits">Légumes fruits :</label>
          <select name="Légumes fruits" id="Légumes fruits">

            <option value="pasteque" selected>Pastèque</option>

            <option value="melon">Melon</option>

            <option value="poivron">Poivron</option>

            <option value="concombre">Concombre</option>

            <option value="aubergine">Aubergine</option>
            
            <option value="tomate">Tomate</option>
            </select>
            </p>

               <p>
        <label for="Fruits rouges">Fruits rouges :</label>
          <select name="Fruits rouges" id="Fruits rouges">

            <option value="fraise" selected>Fraise</option>

            <option value="groseille">Groseille</option>

            <option value="cassis">Cassis</option>

            <option value="myrtille">Myrtille</option>

            <option value="framboise">Framboise</option>
            
            <option value="mûre">Mûre</option>
            </select>
            </p>
          </fieldset>

           <fieldset>
        <legend>Sélectionner votre légume </legend>

          <p>
        <label for="Aromatiques fraiches">Aromatiques fraiches :</label>
          <select name="Aromatiques fraiches" id="Aromatiques fraiches">

            <option value="echalotte" selected>Echalotte</option>

            <option value="persil">Persil</option>

            <option value="ail">Ail</option>

            <option value="oseille ">Oseille</option>

            
            
            </select>
            </p>

             <p>
        <label for="Champignons">Champignons:</label>
          <select name="Champignons" id="Champignons">

            <option value="Morille" selected>Morille</option>

            <option value="Champignon de Paris">Champignon de Paris</option>

            <option value="Cêpe de la passion">Cêpe</option>

            </select>
            </p>

            <p>
        <label for="Choux">Choux :</label>
          <select name="Choux" id="Choux">

            <option value="Brocoli" selected>Grenade</option>

            <option value="Choux-fleur">Litchi</option>
 
            </select>
            </p>

            <p>
        <label for="Courges">Courges :</label>
          <select name="Courges" id="Courges">

            <option value="courgette" selected>Courgette</option>

            <option value="potiron">Potiron</option>

            
            </select>
            </p>
 <p>
        <label for="Légumes secs">Légumes secs:</label>
          <select name="Légumes secs" id="Légumes secs">

            <option value="Germe de haricot" selected>Germe de Haricot</option>

            <option value="Fève">Fève</option>

            <option value="lentille">Lentille</option>

            <option value="haricot verts ">Haricot verts</option>

            <option value="petits poids">Petits poids</option>
            
           
            </select>
            </p>
  <p>
        <label for="Légumes feuilles">Légumes feuilles:</label>
          <select name="Légumes feuilles" id="Légumes feuilles">

            <option value="Epinards" selected>Epinards</option>

            <option value="Blettes">Blettes</option>

            <option value="poireaux">Poireaux</option>

            <option value="Artichaut ">Artichaut</option>

            <option value="fenouil">Fenouil</option>
            
            
            </select>
            </p>
             <p>
        <label for="Légumes racines">Légumes racines:</label>
          <select name="Légumes racines" id="Légumes racines">

            <option value="Panais" selected>Panais</option>

            <option value="radis">Radis</option>

            <option value="oignon">Oignon</option>

            <option value="carotte ">Carotte</option>

            <option value="navet">Navet</option>
            
            <option value="betterave">Betterave</option>
            <option value="asperge" selected>Asperge</option>

            <option value="cèleri">Cèleri</option>

           
            </select>
            </p>

             <p>
        <label for="Pomme de terre">Pomme de terre:</label>
          <select name="Pomme de terre" id="Pomme de terre">

            <option value="pomme de terre" selected>Pomme de terre</option>

            <option value="patate douce">Patate douce</option>

            
            </select>
            </p>

            <p>
        <label for="Salades">Salades :</label>
          <select name="Salades" id="Salades">

            <option value="cresson" selected>Cresson</option>

            <option value="pourpier">Pourpier</option>

            <option value="laitue">Laitue</option>

            <option value="mâche ">Mâche</option>

            <option value="chicorée">Chicorée</option>
            
            <option value="endives">Endives</option>
            
            </select>
            </p>
        </p>
       
      </fieldset>

      <p>
        <input type="submit" name="sauver" id="sauver" value="Sauvegarder l'annonce">
      </p>
    </div>
  </form>
</body>
</html>

