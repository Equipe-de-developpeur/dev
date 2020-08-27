<section id="CommentairesMer">

  <!--Titre-->

  <div class="TitreCommentairesMer">
    <h2>Commentaires :</h2>
  </div>

  <!--Section Commentaires-->

  <div class="SectionCommentairesMer">

    <div class="PartieGauche">


      <!--Ecrire un Commentaire-->

      <form method="post" action="header.php">

        <!--Champ d'écriture du Commentaires-->

        <div class="ChampDeRechercheCommentairesMer">
          <textarea name="NewCommentaires" id="NewCommentaires" rows="5" cols="30" minlength="3" maxlength="500" placeholder="Vous pouvez écrire votre commentaire ici. Penser a mentionner l'endroit dont vous parlez" required></textarea>
        </div>

        <!--Envoi du Commentaire-->

        <div class="ChampEnvoiCommentairesMer">
          <input type="submit" value="ENVOYER">
        </div>
      </form>

      <!--Recherche Commentaires-->

      <div class="RechercheCommentairesMer">

        <form method="post" action="header.php">

          <!--Envoi de la Recherche Commentaires-->

          <div class="ChampEnvoiCommentairesMer">
            <input type="submit" value="RECHERCHE">
          </div>

          <!--Champ Recherche Commentaires-->

          <div class="ChampDeRechercheCommentairesMer">
            <input type="text" id="commentaires" name="commentaires" maxlength="30" placeholder="Recherche" autocomplete="">
          </div>
        </form>

      </div>
    </div>

    <!--Base Commentaires-->

    <div class="BaseCommentairesMer">

      <!--Début Commentaires-->

      <div class="DebutCommentairesMer">
        <div class="Entete">
          <p class="NomAuteur">Nom</p>
          <p class="DateEnvoi">24/08/2020 à 16h30</p>
        </div>
        <div class="Contenu">
          <p class="Texte">J'adore le département du Var !</p>
        </div>
      </div>

      <!--Réponse Commentaires-->

      <div class="ReponseCommentairesMer">
        <div class="Entete">
          <p class="NomAuteur">Nom</p>
          <p class="DateEnvoi">25/08/2020 à 17h40</p>
        </div>
        <div class="Contenu">
          <p class="Texte">Moi aussi !</p>
        </div>
      </div>
    </div>


  </div>
</section>