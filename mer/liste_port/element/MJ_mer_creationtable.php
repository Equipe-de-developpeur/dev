<?php

try {

    //Création de la table JM_mer_liste_port si non existante
    //Cette table contiendra tous les ports
    $table = "CREATE TABLE IF NOT EXISTS JM_mer_liste_port (
        liste_port_lieu_id INT PRIMARY KEY AUTO_INCREMENT,
        liste_port_lieu VARCHAR(100) UNIQUE NOT NULL,
        liste_port_lien VARCHAR(255),
        liste_port_label_pp TINYINT(2) NOT NULL,
        liste_port_label_aeb TINYINT(2) NOT NULL,
        liste_port_label_pb TINYINT(1) NOT NULL,
        liste_port_localisation VARCHAR(100) NOT NULL,
        liste_port_carte VARCHAR(255) NOT NULL,
        liste_port_moyenne INT(5)
    )";
    /*
    lieu_id -> numéro id du port
    lieu -> nom du port
    lien -> lien vers le site du port
    label_pp -> certificat port propre ; 0 = Non, 1 = Engagé, 2 = Certifié
    label_aeb -> certificat actifs en biodiversité ; 0 = Non, 1 = Engagé, 2 = Certifié
    label_pb -> certificat port propres ; 0 = Non, 1 = Oui
    localisation -> nom de la ville où est situé le port
    carte -> lien vers une carte en ligne indiquant le lieu
    moyenne -> moyenne des votes pour le port
    */
    $pdo->exec($table);

    //Insertion des données
    include_once "MJ_mer_insertionbdd.php";

    //Création de la table JM_mer_commentaire_port si non existante
    //Cette table contiendra tous les commentaires
    $table_com = "CREATE TABLE IF NOT EXISTS JM_mer_commentaire_port (
        commentaire_port_commentaire_id INT PRIMARY KEY AUTO_INCREMENT,
        commentaire_port_lieu_id INT,
        commentaire_port_utilisateur_pseudo VARCHAR(255),
        commentaire_port_commentaire VARCHAR(500) NOT NULL UNIQUE,
        commentaire_port_temps DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        commentaire_port_fichier VARCHAR(100),
        commentaire_port_parent_id INT,
        FOREIGN KEY (commentaire_port_lieu_id) REFERENCES JM_mer_liste_port(liste_port_lieu_id),
        FOREIGN KEY (commentaire_port_parent_id) REFERENCES JM_mer_commentaire_port(commentaire_port_commentaire_id)
    )";
    /*
    commentaire_id -> numéro id du commentaire
    lieu_id -> id du port qui a reçu le commentaire
    utilisateur_pseudo -> pseudo de l'utilisateur qui a envoyé le commentaire
    commentaire -> le commentaire
    temps -> la date et l'heure d'envoi du commentaire
    fichier -> la destination du fichier envoyé avec le commentaire
    parent_id -> si le commentaire est un réponse à un autre, contient l'id du commentaire auquel il répond
    */
    $pdo->exec($table_com);

    //Création de la table JM_mer_vote_port
    //Cette table contiendra les votes des utilisateurs
    $table_vote = "CREATE TABLE IF NOT EXISTS JM_mer_vote_port (
        vote_port_id INT PRIMARY KEY AUTO_INCREMENT,
        vote_port_value INT(5) NOT NULL,
        vote_port_user INT(11) NOT NULL,
        vote_port_location INT(11) NOT NULL,
        FOREIGN KEY (vote_port_user) REFERENCES wd_utilisateur(utilisateur_id),
        FOREIGN KEY (vote_port_location) REFERENCES jm_mer_liste_port(liste_port_lieu_id)
    )";
    /*
    id -> numéro id du vote
    value -> valeur du vote
    user -> le numéro id de l'utilisateur qui a envoyé le vote
    location -> le numéro id du port qui a reçu le vote
    */
    $pdo->exec($table_vote);
    
}

catch (PDOException $e) {
    echo $e->getMessage();
}