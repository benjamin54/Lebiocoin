<?php include ('header.php') ?> 
<?php
/*$_SESSION['codepostal']=$_POST['codepostal'];
$_SESSION['ville']=$_POST['ville'];*/
?>
<!DOCTYPE html>
<html>
<body>
  <div id="annonce">
      
        <h4>JE CREE MON ANNONCE</h4>

        <p>
          Veuillez remplir le formulaire ci dessous. Les champs <p2 style="color:red"> * </p2> sont obligatoires.</font>
        </p>

        <form method="POST" action="controlleurs/traitement_annonce.php" onSubmit="return verif_formulaire()" enctype="multipart/form-data">

          <fieldset>
            <legend><b>Catégorie</b></legend>

            <p>
              <label for="nom_categoriep">Catégorie:<p2 style="color:red"> *</p2></label>
              <select name="nom_categoriep" id="nom_categoriep">
                <option value="fruit">Fruits</option>
                <option value="legume">Légumes</option>
              </select>
              
            </p>

            <p>
              <label for="nom_categoriea">Type d'annonce:<p2 style="color:red"> *</p2></label> 
              <input type="radio" name="nom_categoriea" value="achat" id="nom_categoriea" checked/> Achat
              <input type="radio" name="nom_categoriea" value="echange" /> Echange
              
            </p>
          </fieldset>

          <fieldset>
            <legend><b>Localisation</b></legend>

            <p>
              <label for="codepostal">Code postal:<p2 style="color:red"> *</p2></label> 
              <input type="text" name="codepostal" id="codepostal" value="<?php if (isset($_SESSION['codepostal'])){echo $_SESSION['codepostal'];} ?>" required/>  <!-- voir -->
            </p>

            <p>
              <label for="ville">Ville: <p2 style="color:red"> *</p2></label> 
              <input type="text" name="ville"$mail  id="ville" value="<?php if (isset($_SESSION['ville'])){echo $_SESSION['ville'];}?>" required/>  
            </p>

            <p>
              <label for="region">D&eacutepartement/R&eacutegion:<p2 style="color:red"> *</p2></label>
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
            <legend><b>Vos informations</b></legend>
            <p>
              <label for="nom">Votre nom:<p2 style="color:red"> *</p2></label>
              <input type="text" name="nom" id="nom" value="" required/>
            </p>
            <p>
              <label for="mail">Adresse mail:<p2 style="color:red"> *</p2></label>
              <input type="mail" name="mail" id="mail" value="<?php if (isset($_SESSION['mail'])){echo $_SESSION['mail'];}?>" required/>
            </p>
            <p>
              <label for="tel">Téléphone:<p2 style="color:red"> *</p2></label>
              <input type="tel" name="tel" id="tel" value="<?php if (isset($_SESSION['tel'])){echo $_SESSION['tel'];}?>" required/>
            </p>
          </fieldset>

          <fieldset>
            <legend><b>Votre annonce</b></legend>
            <p>
              <label for="titre">Titre de l'annonce: <p2 style="color:red"> *</p2></label>
              <input type="text" name="titre" id="titre" required />
            </p>

            <p>
              <label for="variete">Variété:<p2 style="color:red"> *</p2></label>
              <select id="variete" data-validation="required" required="required" name="variete">

                <option value=""></option>
                <option value="1">
                  Abricots
                </option>
                <option value="22">
                  Agrumes
                </option>
                <option value="30">
                  Ails,oignons, échalottes
                </option>
                <option value="160">
                  Ananas
                </option>
                <option value="4">
                  Artichauts
                </option>
                <option value="5">
                  Asperges
                </option>
                <option value="6">
                  Aubergines
                </option>
                <option value="161">
                  Avocat
                </option>
                <option value="125">
                  Baies et petits fruits
                </option>
                <option value="162">
                  Banane
                </option>
                <option value="131">
                  Betteraves
                </option>
                <option value="182">
                  Brèdes
                </option>
                <option value="10">
                  Brocolis
                </option>
                <option value="11">
                  Brugnons
                </option>
                <option value="12">
                  Carottes
                </option>
                <option value="14">
                  Céléris
                </option>
                <option value="16">
                  Cerises
                </option>
                <option value="132">
                  Champignons
                </option>
                <option value="17">
                  Châtaignes et marrons
                </option>
                <option value="163">
                  Chayotte
                </option>
                <option value="18">
                  Choux
                </option>
                <option value="164">
                  Citrons
                </option>
                <option value="25">
                  Coings
                </option>
                <option value="26">
                  Concombres
                </option>
                <option value="165">
                  Corossol
                </option>
                <option value="122">
                  Courges et potirons
                </option>
                <option value="28">
                  Courgettes
                </option>
                <option value="31">
                  Endives
                </option>
                <option value="32">
                  Epinards
                </option>
                <option value="129">
                  Fèves
                </option>
                <option value="35">
                  Figues
                </option>
                <option value="36">
                  Fraises
                </option>
                <option value="37">
                  Framboises
                </option>
                <option value="166">
                  Fruit de la passion
                </option>
                <option value="121">
                  Fruits secs
                </option>
                <option value="167">
                  Goyave
                </option>
                <option value="151">
                  Graines de fleurs
                </option>
                <option value="145">
                  Graines et semis
                </option>
                <option value="168">
                  Grenade
                </option>
                <option value="41">
                  Haricots 
                </option>
                <option value="169">
                  Igname
                </option>
                <option value="42">
                  Kiwis
                </option>
                <option value="120">
                  Légumes divers
                </option>
                <option value="124">
                  Lentilles
                </option>
                <option value="170">
                  Litchi
                </option>
                <option value="171">
                  Mangue
                </option>
                <option value="172">
                  Manioc
                </option>
                <option value="50">
                  Melons
                </option>
                <option value="146">
                  Miels
                </option>
                <option value="119">
                  Mirabelles
                </option>
                <option value="55">
                  Navets
                </option>
                <option value="173">
                  Noix de coco
                </option>
                <option value="123">
                  Olives
                </option>
                <option value="174">
                  Papaye
                </option>
                <option value="61">
                  Pastèques
                </option>
                <option value="176">
                  Patate douce
                </option>
                <option value="62">
                  Pêches
                </option>
                <option value="64">
                  Petits pois
                </option>
                <option value="147">
                  Piments
                </option>
                <option value="177">
                  Pitaya
                </option>
                <option value="118">
                  Plantes aromatiques
                </option>
                <option value="66">
                  Poireaux
                </option>
                <option value="65">
                  Poires
                </option>
                <option value="68">
                  Poivrons
                </option>
                <option value="69">
                  Pommes
                </option>
                <option value="70">
                  Pommes de terre
                </option>
                <option value="72">
                  Prunes
                </option>
                <option value="74">
                  Radis
                </option>
                <option value="75">
                  Raisins
                </option>
                <option value="44">
                  Salades et laitues
                </option>
                <option value="80">
                  Salsifis
                </option>
                <option value="178">
                  Tamarillo
                </option>
                <option value="179">
                  Tamarin
                </option>
                <option value="184">
                  Taro
                </option>
                <option value="83">
                  Tomates
                </option>
                <option value="150">
                  Topinambours
                </option>
                <option value="181">
                  Vanilles
                </option>
              </select>
            </p>
            <p>
              <label for="photo_annonce">Photo pour votre produit:</label>
              <input type="file" name="photo_annonce" id="photo_annonce" required/> <!-- mettre une photo à l\'annonce -->
            </p>


            <p>
              <label for="texte"> Texte de l'annonce:<p2 style="color:red"> *</p2></label> 
              <textarea name="texte" id="texte" wrap="off" rows="6" cols="50" required></textarea>      
            </p>

            <p>
              <label for="quantite"> Quantité:<p2 style="color:red"> *</p2></label>
              <input type="text" name="quantite" id="quantite" value="2" required/> (en kgs)
            </p>

            <p>
              <label for="prix"> Prix:<p2 style="color:red"> *</p2></label>
              <input type="text" name="prix" id="prix" required/> (en euros/kg)
            </p>
          </fieldset>

          <p>
            <input type="submit" name="sauver" id="sauver" value="Sauvegarder l'annonce">
          </p>
        
      </form>

    </div>
</body>
</html>

