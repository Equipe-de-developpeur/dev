<?php

function securite($donnee) {
    $donnee = htmlspecialchars($donnee);
    $donnee = trim($donnee);
    $donnee = stripslashes($donnee);
    $donnee = str_replace("'", "\'", $donnee);
    return $donnee;
}

if (isset($_POST["username"])) {

    $username = securite($_POST["username"]);
    $commentaire = securite($_POST["commentaire"]);

    if (isset($_FILES['file']) && $_FILES['file']['name'] != NULL) {
        $insertcom = $pdo->prepare("INSERT INTO `jm_mer_commentaire_port`(`commentaire_port_lieu_id`, `commentaire_port_username`, `commentaire_port_commentaire`, `commentaire_port_fichier`) VALUES ('$ID', '$username', '$commentaire', '$dossier$fichier')");
        $insertcom->execute();
    }
    else {
        $insertcom = $pdo->prepare("INSERT INTO `jm_mer_commentaire_port`(`commentaire_port_lieu_id`, `commentaire_port_username`, `commentaire_port_commentaire`) VALUES ('$ID', '$username', '$commentaire')");
        $insertcom->execute();
    }
}
