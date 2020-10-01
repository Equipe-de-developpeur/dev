<?php if (isset($_SESSION['utilisateur_pseudo'])) {
  $nom = $_SESSION['utilisateur_pseudo'];
} ?>

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


          <?php if (isset($_SESSION['utilisateur_pseudo'])) { ?>

            <input type="text" id="nom" name="nom" maxlength="30" value="<?= $nom ?>" autocomplete="" required readonly>

            <select id="lieu" name="lieu">
              <option>VAR</option>
              <optgroup label="Plages">
                <?php
                $bdd = new DA_mer_plage_liste_bdd_MODEL;
                $connexion = $bdd->connexionbdd();
                $req = $connexion->query("SELECT * FROM da_liste_plage WHERE 1");

                while ($donnees = $req->fetch()) {

                  $lieux = $donnees['liste_plage_lieux'];

                ?>

                  <option><?= $lieux ?></option>

                <?php } ?>
              </optgroup>
              <optgroup label="Villes">
                <?php
                $bdd = new DA_mer_plage_liste_bdd_MODEL;
                $connexion = $bdd->connexionbdd();
                $req = $connexion->query("SELECT DISTINCT liste_plage_villes FROM da_liste_plage WHERE 1");

                while ($donnees = $req->fetch()) {

                  $villes = $donnees['liste_plage_villes'];

                ?>
                  <option><?= $villes ?></option>
                <?php } ?>
              </optgroup>
            </select>

            <textarea name="NewCommentaires" id="NewCommentaires" rows="6" cols="40" minlength="3" maxlength="500" placeholder="Vous pouvez écrire votre commentaire ici.<?= "\n\n" ?>Vous devez être connecter pour écrire un commentaire" required></textarea>
        </div>
        <div class="ChampEnvoiCommentairesPlage">
          <input type="submit" value="ENVOYER">
        </div>
      </form>

    <?php } else { ?>
      <input type="text" id="nom" name="nom" maxlength="30" value="NOM" autocomplete="" required readonly>
      <input type="text" id="lieu" name="lieu" maxlength="50" placeholder="Lieux" autocomplete="" required readonly>
      <textarea name="NewCommentaires" id="NewCommentaires" rows="6" cols="40" minlength="3" maxlength="500" placeholder="Vous pouvez écrire votre commentaire ici.<?= "\n\n" ?>Vous devez être connecter pour écrire un commentaire" required readonly></textarea>
    </div>
    </form>
  <?php } ?>
  <!--fermeture du else-->




  <?php include_once "DA_mer_plage_liste_commentaires_recherche.php"; ?>

  <!--Base Commentaires-->

  <div class="BaseCommentairesPlage">

    <?php
    $bdd2 = new DA_mer_plage_liste_MODEL;
    $connexion2 = $bdd2->commentaires();
    $req2 = $connexion->query("SELECT * FROM da_commentaires_plage WHERE commentaires_plage_id_parent = '0'");

    while ($donnees = $req2->fetch()) {
      // Enregistrement des données sous forme de variables
      $textes = $donnees['commentaires_plage_textes'];
      $noms = $donnees['commentaires_plage_noms'];
      $lieux = $donnees['commentaires_plage_lieux'];
      $dates = date("d-m-Y  H:i:s", strtotime($donnees['commentaires_plage_dates']));
      $id_parent = $donnees['commentaires_plage_id_parent'];
      $commentaires_plage_id = $donnees['commentaires_plage_id'];
    ?>

      <!-- Début Commentaires -->

      <div class="DebutCommentairesPlage" id=<?= $commentaires_plage_id ?>>
        <div class="Entete">
          <p class="NomAuteur"><?= $noms ?>&nbsp;&nbsp;</p>
          <p class="DateEnvoi"><?= $dates ?>&nbsp;&nbsp;</p>
          <p class="NomLieu"><?= $lieux ?></p>
        </div>
        <div class="Contenu">
          <p class="Texte"><?= $textes ?></p>
        </div>
        <div>
          <button class="répondre" name=<?= $textes ?> id=<?= $commentaires_plage_id ?>>Répondre</button>
        </div>
      </div>

      <?php

      $req3 = $connexion->query("SELECT * FROM da_commentaires_plage WHERE commentaires_plage_id_parent = '" . $commentaires_plage_id . "'");

      while ($donnees = $req3->fetch()) {
        // Enregistrement des données sous forme de variables
        $textes = $donnees['commentaires_plage_textes'];
        $noms = $donnees['commentaires_plage_noms'];
        $lieux = $donnees['commentaires_plage_lieux'];
        $dates = date("d-m-Y  H:i:s", strtotime($donnees['commentaires_plage_dates']));
        $id_parent = $donnees['commentaires_plage_id_parent'];
        $commentaires_plage_id = $donnees['commentaires_plage_id'];
      ?>


        <div class="ReponseCommentairesPlage" id=<?= $commentaires_plage_id ?>>
          <div class="Entete">
            <p class="NomAuteur"><?= $noms ?>&nbsp;&nbsp;</p>
            <p class="DateEnvoi"><?= $dates ?>&nbsp;&nbsp;</p>
            <p class="NomLieu"><?= $lieux ?></p>

          </div>
          <div class="Contenu">
            <p class="Texte"><?= $textes ?></p>
          </div>


        </div>
    <?php   }
    }    ?>
  </div>
  </div>
</section>


<script>
  $(document).on('click', '.répondre', function() {
    var commentaires_plage_id = $(this).attr("id");
    var commentaires = $(this).attr("name");
    commentaires = "Répondre à : \n" + commentaires;
    $('#commentaires_plage_id_parent').val(commentaires_plage_id);
    $('#NewCommentaires').focus();
    $('#NewCommentaires').css("background-color", "rgb(241, 239, 239)");
    $('#NewCommentaires').attr("placeholder", commentaires);

  });
</script>