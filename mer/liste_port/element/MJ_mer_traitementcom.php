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
if (isset($_POST["commentaire"])) {

    //Application du traitement de sécurité
    $username = $_POST["username"];
    $commentaire = securite($_POST["commentaire"]);

    try {
        //Si le commentaire envoyé n'est pas une réponse.
        if (!isset($_POST["parentId"])){
            //Si le commentaire est envoyé avec un fichier
            if (isset($_FILES['file']) && $_FILES['file']['name'] != NULL) {
                $insertcom = $pdo->prepare("INSERT INTO `jm_mer_commentaire_port`(`commentaire_port_lieu_id`, `commentaire_port_utilisateur_pseudo`, `commentaire_port_commentaire`, `commentaire_port_fichier`) VALUES ('$ID', '$username', '$commentaire', '$fichier')");
                $insertcom->execute();
            }
            //Si le commentaire n'est pas envoyé avec un fichier
            else {
                $insertcom = $pdo->prepare("INSERT INTO `jm_mer_commentaire_port`(`commentaire_port_lieu_id`, `commentaire_port_utilisateur_pseudo`, `commentaire_port_commentaire`) VALUES ('$ID', '$username', '$commentaire')");
                $insertcom->execute();
            }
        }
        //Si le commentaire envoyé est une réponse
        else {
            $parent = $_POST["parentId"];
            //Si la réponse est envoyé avec un fichier
            if (isset($_FILES['file']) && $_FILES['file']['name'] != NULL) {
                $insertcom = $pdo->prepare("INSERT INTO `jm_mer_commentaire_port`(`commentaire_port_lieu_id`, `commentaire_port_utilisateur_pseudo`, `commentaire_port_commentaire`, `commentaire_port_fichier`, `commentaire_port_parent_id`) VALUES ('$ID', '$username', '$commentaire', '$fichier', '$parent')");
                $insertcom->execute();
            }
            //Si la réponse n'est pas envoyé avec un fichier
            else {
                $insertcom = $pdo->prepare("INSERT INTO `jm_mer_commentaire_port`(`commentaire_port_lieu_id`, `commentaire_port_utilisateur_pseudo`, `commentaire_port_commentaire`, `commentaire_port_parent_id`) VALUES ('$ID', '$username', '$commentaire', '$parent')");
                $insertcom->execute();
            }
        }
        $msg = "Votre commentaire a bien été envoyé.";
    }
    catch(Exception $e) {
        if($e->getCode() == 23000) {
            $msg = "Ce commentaire a déjà été envoyé.";
        }
        else {
            $msg = 'Erreur : ' . $e->getMessage();
        }
    }
}
