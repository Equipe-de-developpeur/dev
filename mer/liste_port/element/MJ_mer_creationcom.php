<?php

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

$pdo->exec($table_com);

?>