<?php

$table_com = "CREATE TABLE IF NOT EXISTS JM_mer_commentaire_port (
    commentaire_id INT PRIMARY KEY AUTO_INCREMENT,
    lieu_id INT,
    username VARCHAR(30) NOT NULL,
    commentaire VARCHAR(500) NOT NULL UNIQUE,
    temps DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (lieu_id) REFERENCES JM_mer_liste_port(lieu_id)
)";

$pdo->exec($table_com);

?>