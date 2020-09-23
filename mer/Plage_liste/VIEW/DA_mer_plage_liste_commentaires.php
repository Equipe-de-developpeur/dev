<section id="CommentairesPlage">

  <!--Titre-->

  <div class="TitreCommentairesPlage">
    <h2>Commentaires :</h2>
  </div>

  <!--Section Commentaires-->

  <div class="SectionCommentairesPlage">

    <div class="PartieGauche">

      <!--Ecrire un Commentaire-->

      <form method="post" name="commentaires" action="CONTROLLER/DA_mer_plage_liste_commentaires_envoie.php">

        <!--Champ d'écriture du Commentaires-->

        <div class="ChampDeRechercheCommentairesPlage">
          <input type="text" id="commentaires_plage_id_parent" name="commentaires_plage_id_parent" value="0" hidden>
          <input type="text" id="nom" name="nom" maxlength="30" placeholder="Nom" autocomplete="" required>
          <input type="text" id="lieu" name="lieu" maxlength="50" placeholder="Lieux" autocomplete="" required>
          <textarea name="NewCommentaires" id="NewCommentaires" rows="6" cols="40" minlength="3" maxlength="500" placeholder="Vous pouvez écrire votre commentaire ici. Penser a mentionner l'endroit dont vous parlez" required></textarea>
        </div>

        <!--Envoi du Commentaire-->

        <div class="ChampEnvoiCommentairesPlage">
          <input type="submit" value="ENVOYER">
        </div>
      </form>

      <?php include_once "DA_mer_plage_liste_commentaires_recherche.php"; ?>

      <!--Base Commentaires-->

      <div class="BaseCommentairesPlage">

        <?php

        $req2 = $connexion->query("SELECT * FROM da_commentaires_plage WHERE commentaires_plage_id_parent = '0'");

        while ($donnees = $req2->fetch()) {
          // Enregistrement des données sous forme de variables
          $textes = $donnees['commentaires_plage_textes'];
          $noms = $donnees['commentaires_plage_noms'];
          $lieux = $donnees['commentaires_plage_lieux'];
          $dates = date("d-m-Y  H:i:s", strtotime($donnees['commentaires_plage_dates']));
          $id_parent = $donnees['commentaires_plage_id_parent'];
          $commentaires_plage_id = $donnees['commentaires_plage_id'];
          

          /*Début Commentaires*/
            echo ('
      <div class="DebutCommentairesPlage" id="' . $commentaires_plage_id . '">
        <div class="Entete">
          <p class="NomAuteur">' . $noms . '&nbsp;&nbsp;</p>
          <p class="DateEnvoi">' . $dates . '&nbsp;&nbsp;</p>
          <p class="NomLieu">' . $lieux . '</p>
        </div>
        <div class="Contenu">
          <p class="Texte">' . $textes . '</p>
        </div>
        <div>
        <button class="répondre" name="'.$textes.'" id="' . $commentaires_plage_id . '" >Répondre</button>
        </div>
        </div>');

        $req3 = $connexion->query("SELECT * FROM da_commentaires_plage WHERE commentaires_plage_id_parent = '".$commentaires_plage_id."'");
         
          while ($donnees = $req3->fetch()) {
          // Enregistrement des données sous forme de variables
          $textes = $donnees['commentaires_plage_textes'];
          $noms = $donnees['commentaires_plage_noms'];
          $lieux = $donnees['commentaires_plage_lieux'];
          $dates = date("d-m-Y  H:i:s", strtotime($donnees['commentaires_plage_dates']));
          $id_parent = $donnees['commentaires_plage_id_parent'];
          $commentaires_plage_id = $donnees['commentaires_plage_id'];

            echo ('
          <div class="ReponseCommentairesPlage" id="' . $commentaires_plage_id . '">
        <div class="Entete">
          <p class="NomAuteur">' . $noms . '&nbsp;&nbsp;</p>
          <p class="DateEnvoi">' . $dates . '&nbsp;&nbsp;</p>
          <p class="NomLieu">' . $lieux . '</p>
          
        </div>
        <div class="Contenu">
          <p class="Texte">' . $textes . '</p>
        </div>');
          
          
          echo ('</div>');
        }}
        echo ('</div></div></section>');


        ?>
        <script>
          $(document).on('click', '.répondre', function() {
            var commentaires_plage_id = $(this).attr("id");
            var commentaires = $(this).attr("name");
            commentaires= "Répondre à : \n"+commentaires;
            $('#commentaires_plage_id_parent').val(commentaires_plage_id);
            $('#NewCommentaires').focus();
            $('#NewCommentaires').css("background-color", "rgb(241, 239, 239)");
            $('#NewCommentaires').attr("placeholder", commentaires);

          });
        </script>