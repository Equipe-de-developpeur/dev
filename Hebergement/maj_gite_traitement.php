<?php
include 'config_bdd_gite.php';
include 'header_hebergement.php'; ?>
<article class="article article_1">
    <?php
    // Récupération des données du formulaire
    $id_gite = $_POST['id_gite'];
    $nom_upd = $_POST['nom'];
    $localisation_upd = $_POST['localisation'];
   


    // procédure de la mise à jour des infos du gite
    $req = $bdd->prepare("UPDATE gites SET nom = '$nom_upd', localisation = '$localisation_upd' WHERE id = '$id_gite'");
    // $req = $bdd->prepare('UPDATE gites SET nom = :nom_upd, localisation = :localisation_upd, note = :note_upd WHERE id = :id_gite");

    if ($req->execute([$nom_upd, $localisation_upd, $id_gite]
       
    )) {
        echo '<h2>Les informations ont bien été modifiées</h2> 
        <a href="gite.php" style="margin: auto; text-align: center;"><button class="btn btn-success">Retourner à la liste des gites</button> </a>';
    } else {
        echo 'Un problème est survenu : <br>';
        // Prise en charge des erreurs
        print_r($req->errorInfo());
    }
    ?>
</article>