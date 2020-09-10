<?php

//Création de traitement de sécurité pour les commentaires reçus
function securite($donnee) {
    $donnee = htmlspecialchars($donnee);
    $donnee = trim($donnee);
    $donnee = stripslashes($donnee);
    $donnee = str_replace("'", "\'", $donnee);
    return $donnee;
}

//Si un commentaire est envoyé
if (isset($_POST["username"])) {

    //Application du traitement de sécurité
    $username = securite($_POST["username"]);
    $commentaire = securite($_POST["commentaire"]);

    //Si le commentaire est envoyé avec un fichier
    if (isset($_FILES['file']) && $_FILES['file']['name'] != NULL) {
        $insertcom = $pdo->prepare("INSERT INTO `jm_mer_commentaire_port`(`commentaire_port_lieu_id`, `commentaire_port_username`, `commentaire_port_commentaire`, `commentaire_port_fichier`) VALUES ('$ID', '$username', '$commentaire', '$dossier$fichier')");
        $insertcom->execute();
    }
    //Si le commentaire n'est pas envoyé avec un fichier
    else {
        $insertcom = $pdo->prepare("INSERT INTO `jm_mer_commentaire_port`(`commentaire_port_lieu_id`, `commentaire_port_username`, `commentaire_port_commentaire`) VALUES ('$ID', '$username', '$commentaire')");
        $insertcom->execute();
    }
}
