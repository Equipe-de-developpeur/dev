<?php


// Création de la table da_liste_plage dans la base var_nature

$nom_table1 = 'da_liste_plage';

$table1 = "CREATE TABLE IF NOT EXISTS $nom_table1 (
  liste_plage_id INT PRIMARY KEY AUTO_INCREMENT,
  liste_plage_lieux VARCHAR(50) NULL UNIQUE,
  liste_plage_villes VARCHAR(50) NULL,
  liste_plage_liens VARCHAR(300) NULL,
  liste_plage_distances VARCHAR(10)NULL,
  liste_plage_actions VARCHAR(500) NULL,
  liste_plage_note_moyenne FLOAT NULL,
  liste_plage_votre_avis INT NULL,
  liste_plage_nombre_de_vote INT NULL
)";

$connexion->exec($table1);

// Création de la table da_commentaires_plage dans la base var_nature

$nom_table2 = 'da_commentaires_plage';

$table2 = "CREATE TABLE IF NOT EXISTS $nom_table2 (
  commentaires_plage_id INT PRIMARY KEY AUTO_INCREMENT,
  commentaires_plage_id_parent INT NOT NULL DEFAULT '0',
  commentaires_plage_textes VARCHAR(2000) NOT NULL,
  commentaires_plage_noms VARCHAR(50),
  commentaires_plage_dates DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  commentaires_plage_lieux VARCHAR(50),
  commentaires_plage_réponses VARCHAR(2000)
  
)";

$connexion->exec($table2);

// Création de la table da_vote_plage dans la base var_nature

$nom_table3 = 'da_vote_plage';

$table3 = "CREATE TABLE IF NOT EXISTS $nom_table3 (
  vote_plage_id INT PRIMARY KEY AUTO_INCREMENT,
  vote_plage_note FLOAT NOT NULL,
  vote_plage_lieu_id INT(99) NOT NULL
)";

$connexion->exec($table3);

?>