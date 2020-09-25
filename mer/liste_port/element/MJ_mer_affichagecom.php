<?php
//Appel de la classe du formulaire
$reponse = new reponseForm($j['commentaire_port_commentaire_id'], $lieuID);
//Appel de la classe d'affichage des réponses (ici, pour les parents)
$reponseParent = new reponseShow($j);
?>

<!-- Affichage du commentaire -->
<div class="commentaire p-1">
    <?php
    //Affichage des commentaires parents
    echo $reponseParent->getShow();
    ?>
    <!-- Bouton de réponse -->
    <div class="row">
        <button class="" type="button" data-toggle="collapse" data-target="#Reponse<?php echo $reponse->getParent(); ?>" aria-expanded="false" aria-controls="Reponse">
            Répondre
        </button>
    </div>
    <!-- Formulaire de réponse -->
    <div class="row">
        <div class="collapse w-90" id="Reponse<?php echo $reponse->getParent(); ?>">
            <div class="card card-body formres">
                <?php echo $reponse->getForm(); ?>
            </div>
        </div>
    </div>
</div>
    <?php

    //Prélèvement de l'id du parent
    $ancestor = $reponse->getParent();
    //Séléction des commentaires enfants
    $sqlres = $pdo->prepare("SELECT * FROM `jm_mer_commentaire_port` WHERE `commentaire_port_parent_id` = $ancestor");
    $sqlres->execute();
    $listeres = $sqlres->fetchALL(PDO::FETCH_ASSOC);

    //Affichage de tous les commentaires enfants
    foreach($listeres as $k) {
        $reponseChild = new reponseShow($k); ?>
        <div class="reponse p-1">
        <?php echo $reponseChild->getShow(); ?>
        </div>
    <?php }
    ?>