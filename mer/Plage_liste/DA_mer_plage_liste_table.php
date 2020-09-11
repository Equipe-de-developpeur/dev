<?php

// Création de la table da_liste_plage dans la base var_nature

$nom_table1 = 'da_liste_plage';

$table1 = "CREATE TABLE IF NOT EXISTS $nom_table1 (
  liste_plage_id INT PRIMARY KEY AUTO_INCREMENT,
  liste_plage_lieux VARCHAR(50) NOT NULL,
  liste_plage_villes VARCHAR(50) NOT NULL,
  liste_plage_liens VARCHAR(300),
  liste_plage_distances VARCHAR(10),
  liste_plage_actions VARCHAR(500),
  liste_plage_note_moyenne VARCHAR(50) NOT NULL,
  liste_plage_votre_avis VARCHAR(50) NOT NULL
)";

$connexion->exec($table1);

// Création de la table da_commentaires_plage dans la base var_nature

$nom_table2 = 'da_commentaires_plage';

$table2 = "CREATE TABLE IF NOT EXISTS $nom_table2 (
  commentaires_plage_id INT PRIMARY KEY AUTO_INCREMENT,
  commentaires_plage_textes VARCHAR(2000) NOT NULL,
  commentaires_plage_noms VARCHAR(50),
  commentaires_plage_dates VARCHAR(300),
  commentaires_plage_lieux VARCHAR(50),
  commentaires_plage_réponses VARCHAR(2000)
  
)";

$connexion->exec($table2);

?>