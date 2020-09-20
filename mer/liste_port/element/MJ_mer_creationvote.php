<?php

$table_vote = "CREATE TABLE IF NOT EXISTS JM_mer_vote_port (
    vote_port_id INT PRIMARY KEY AUTO_INCREMENT,
    vote_port_value INT(5) NOT NULL,
    vote_port_user INT(11) NOT NULL,
    vote_port_location INT(11) NOT NULL,
    FOREIGN KEY (vote_port_user) REFERENCES wd_utilisateur(utilisateur_id),
    FOREIGN KEY (vote_port_location) REFERENCES jm_mer_liste_port(liste_port_lieu_id)
)";

$pdo->exec($table_vote);

?>