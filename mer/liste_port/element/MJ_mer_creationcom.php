<?php

$table_com = "CREATE TABLE IF NOT EXISTS JM_mer_commentaire_port (
    commentaire_port_commentaire_id INT PRIMARY KEY AUTO_INCREMENT,
    commentaire_port_lieu_id INT,
    commentaire_port_utilisateur_id INT(11),
    commentaire_port_commentaire VARCHAR(500) NOT NULL UNIQUE,
    commentaire_port_temps DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    commentaire_port_fichier VARCHAR(100),
    FOREIGN KEY (commentaire_port_lieu_id) REFERENCES JM_mer_liste_port(liste_port_lieu_id),
    FOREIGN KEY (commentaire_port_utilisateur_id) REFERENCES wd_utilisateur(utilisateur_id)
)";

$pdo->exec($table_com);

?>