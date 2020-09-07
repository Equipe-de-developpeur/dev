<?php

include("DA_mer_plage_liste_bdd.php");?>

<section id="CommentairesPlage">

  <!--Titre-->

  <div class="TitreCommentairesPlage">
    <h2>Commentaires :</h2>
  </div>

  <!--Section Commentaires-->

  <div class="SectionCommentairesPlage">

    <div class="PartieGauche">

    

      <!--Ecrire un Commentaire-->

      <form method="post" name="commentaires" action="DA_mer_plage_liste_commentaires_envoie.php">

        <!--Champ d'écriture du Commentaires-->

        <div class="ChampDeRechercheCommentairesPlage">
          <textarea name="NewCommentaires" id="NewCommentaires" rows="5" cols="30" minlength="3" maxlength="500" placeholder="Vous pouvez écrire votre commentaire ici. Penser a mentionner l'endroit dont vous parlez" required></textarea>
        </div>

        <!--Envoi du Commentaire-->

        <div class="ChampEnvoiCommentairesPlage">
          <input type="submit" value="ENVOYER">
        </div>
      </form>

      <!--Recherche Commentaires-->

      <div class="RechercheCommentairesPlage">

        <form method="post" action="DA_mer_plage_liste.commentaires_envoie.php">

          <!--Envoi de la Recherche Commentaires-->

          <div class="ChampEnvoiCommentairesPlage">
            <input type="submit" value="RECHERCHE">
          </div>

          <!--Champ Recherche Commentaires-->

          <div class="ChampDeRechercheCommentairesPlage">
            <input type="text" id="commentaires" name="commentaires" maxlength="30" placeholder="Recherche" autocomplete="">
          </div>
        </form>

      </div>
    </div>

    <!--Base Commentaires-->

    <div class="BaseCommentairesPlage">



    <?php

$req2 = $connexion->query("SELECT * FROM commentaires_plage WHERE 1");

while ($donnees = $req2->fetch())

{
// Enregistrement des données sous forme de variables
$commentaires_plage_id = $donnees['commentaires_plage_id'];
$textes = $donnees['textes'];
$noms = $donnees['noms'];
$dates = $donnees['dates'];




      /*Début Commentaires*/
echo ('
      <div class="DebutCommentairesPlage" id="'.$commentaires_plage_id.'">
        <div class="Entete">
          <p class="NomAuteur">'.$noms.'</p>
          <p class="DateEnvoi">'.$dates.'</p>
        </div>
        <div class="Contenu">
          <p class="Texte">'.$textes.'</p>
        </div>
      </div>');

}

      /*Réponse Commentaires*/

      /*echo ('
      <div class="ReponseCommentairesPlage">
        <div class="Entete">
          <p class="NomAuteur">Nom</p>
          <p class="DateEnvoi">25/08/2020 à 17h40</p>
        </div>
        <div class="Contenu">
          <p class="Texte">Moi aussi !</p>
        </div>
      </div>');*/

    

    echo ('</div></div></section>');
    

  

?>