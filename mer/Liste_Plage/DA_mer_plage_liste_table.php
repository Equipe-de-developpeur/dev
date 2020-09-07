<?php

// Création de la table liste_plage dans la base var_nature

$nom_table1 = 'liste_plage';

$table1 = "CREATE TABLE IF NOT EXISTS $nom_table1 (
  liste_plage_id INT PRIMARY KEY AUTO_INCREMENT,
  lieux VARCHAR(50) NOT NULL,
  villes VARCHAR(50) NOT NULL,
  liens VARCHAR(300),
  distances VARCHAR(10),
  actions VARCHAR(500),
  note_moyenne VARCHAR(50) NOT NULL,
  votre_avis VARCHAR(50) NOT NULL
)";

$connexion->exec($table1);

// Création de la table commentaires_plage dans la base var_nature

$nom_table2 = 'commentaires_plage';

$table2 = "CREATE TABLE IF NOT EXISTS $nom_table2 (
  commentaires_plage_id INT PRIMARY KEY AUTO_INCREMENT,
  textes VARCHAR(2000) NOT NULL,
  noms VARCHAR(50),
  dates VARCHAR(300),
  lieux VARCHAR(50),
  réponses VARCHAR(2000)
  
)";

$connexion->exec($table2);

?>