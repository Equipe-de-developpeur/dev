<?php
require_once("DA_mer_plage_liste_bdd_MODEL.php");


class DA_mer_plage_liste_MODEL extends DA_mer_plage_liste_bdd_MODEL
{

  public function liste()
  {
    $connexion = $this->connexionbdd();

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


    // Insertion des données 

    //include "DA_mer_plage_liste_table.php";
    $insert = "INSERT IGNORE INTO $nom_table1(liste_plage_lieux,liste_plage_villes,liste_plage_liens,liste_plage_distances,liste_plage_actions) 
    VALUES
    ('Ayguade','Hyères','https://www.hyeres-tourisme.com/equipement-loisir/plage-de-layguade/','km','Pavillon bleu'),
    ('Almanarre Nord','Hyères','https://www.hyeres-tourisme.com/equipement-loisir/plage-de-lalmanarre/','km','Pavillon bleu'),
    ('La Bergerie','Hyères','https://www.hyeres-tourisme.com/equipement-loisir/plage-de-la-bergerie/','km','Pavillon bleu'),
    ('Les Salins','Hyères','https://www.hyeres-tourisme.com/equipement-loisir/plage-des-salins/','km','Pavillon bleu'),
    ('Gigaro','La Croix-Valmer','https://www.plages.tv/detail/plage-de-gigaro-la-croix-valmer-83420','km','Pavillon bleu'),
    ('La Douane / Le Débarquement','La Croix-Valmer','https://www.plages.tv/detail/plage-du-debarquement-la-croix-valmer-83420','km','Pavillon bleu'),
    ('L’Argentière','La Londe-les-Maures','https://www.mpmtourisme.com/loisir/plage-argentiere','km','Pavillon bleu'),
    ('Miramar','La Londe-les-Maures','https://www.mpmtourisme.com/loisir/plage-miramar','km','Pavillon bleu'),
    ('Tamaris','La Londe-les-Maures','https://www.mpmtourisme.com/loisir/plage-tamaris','km','Pavillon bleu'),
    ('Sablettes','La-Seyne-sur-Mer','https://www.plages.tv/detail/plage-des-sablettes-mar-vivo-la-seyne-sur-mer-83500','km','Pavillon bleu'),
    ('Aiguebelle','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-daiguebelle/','km','Pavillon bleu'),
    ('Anglade','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-de-langlade/','km','Pavillon bleu'),
    ('Cavalière','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-de-cavaliere/','km','Pavillon bleu'),
    ('la Fossette','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-de-la-fossette/','km','Pavillon bleu'),
    ('Lavandou ville','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-du-centre-ville/','km','Pavillon bleu'),
    ('Pramousquier','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-de-pramousquier/','km','Pavillon bleu'),
    ('Saint Clair','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-de-saint-clair/','km','Pavillon bleu'),
    ('Les Bonnettes','Le Pradet','http://www.lepradet-tourisme.fr/fr/fiche/plage-des-bonnettes/','km','Pavillon bleu'),
    ('La Garonne','Le Pradet','http://www.lepradet-tourisme.fr/fr/fiche/plage-de-la-garonne/','km','Pavillon bleu'),
    ('Le Monaco','Le Pradet','http://www.lepradet-tourisme.fr/fr/fiche/plage-du-monaco/','km','Pavillon bleu'),
    ('Les Oursinières','Le Pradet','http://www.lepradet-tourisme.fr/fr/fiche/plage-des-oursinieres/','km','Pavillon bleu'),
    ('Canadel','Rayol-Canadel-sur-Mer','https://www.plages.tv/detail/plage-1-rayol-canadel-sur-mer-83820','km','Pavillon bleu'),
    ('Pramousquier Est','Rayol-Canadel-sur-Mer','https://www.plages.tv/detail/plage-de-pramousquier-rayol-canadel-sur-mer-83820','km','Pavillon bleu'),
    ('Rayol','Rayol-Canadel-sur-Mer','https://www.plages.tv/detail/plage-2-rayol-canadel-sur-mer-83820','km','Pavillon bleu'),
    ('La Madrague','Saint-Cyr-sur-Mer','https://www.saintcyrsurmer.com/incontournables/les-plages/la-plage-de-la-madrague/','km','Pavillon bleu'),
    ('Les Lecques Saint Come Ouest','Saint-Cyr-sur-Mer','https://www.saintcyrsurmer.com/incontournables/les-plages/la-plage-des-lecques/','km','Pavillon bleu'),
    ('La Coudoulière','Saint-Mandrier-sur-Mer','https://www.plages.tv/detail/plage-de-la-coudouliere-saint-mandrier-sur-mer-83430','km','Pavillon bleu'),
    ('La Vieille','Saint-Mandrier-sur-Mer','https://www.plages.tv/detail/plage-de-la-vieille-saint-mandrier-sur-mer-83430','km','Pavillon bleu'),
    ('Touring','Saint-Mandrier-sur-Mer','https://www.plages.tv/detail/plage-touring-saint-mandrier-sur-mer-83430','km','Pavillon bleu'),
    ('Le Canon','Saint-Mandrier-sur-Mer','https://www.plages.tv/detail/plage-du-canon-saint-mandrier-sur-mer-83430','km','Pavillon bleu'),
    ('Péguière','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-de-la-peguiere-4778909/','km','Pavillon bleu'),
    ('Veillat','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-du-veillat-4778925/','km','Pavillon bleu'),
    ('Arène Grosse','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-d-arene-grosse-4778587/','km','Pavillon bleu'),
    ('Boulouris','Saint-Raphaël','https://www.saint-raphael.com/fr/saint-raphael/ville/les-quartiers/boulouris','km','Pavillon bleu'),
    ('Dramont','Saint-Raphaël','https://www.esterel-cotedazur.com/decouvrir/plages/plage-du-debarquement/','km','Pavillon bleu'),
    ('Camp Long','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-du-camp-long-4778734/','km','Pavillon bleu'),
    ('Agay','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-d-agay-4778548/','km','Pavillon bleu'),
    ('Pourousset','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-du-pourrousset-4778998/','km','Pavillon bleu'),
    ('Baumette','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-de-la-baumette-4778895/','km','Pavillon bleu'),
    ('Anthéor','Saint-Raphaël','https://www.esterel-cotedazur.com/decouvrir/plages/plage-antheor/','km','Pavillon bleu'),
    ('Garonnette','Sainte-Maxime','https://www.sainte-maxime.com/fr/loisirs/plage-de-la-garonnette-4613684/','km','Pavillon bleu'),
    ('La Croisette','Sainte-Maxime','https://www.sainte-maxime.com/fr/loisirs/plage-de-la-croisette-4813159/','km','Pavillon bleu'),
    ('La Nartelle','Sainte-Maxime','https://www.sainte-maxime.com/fr/loisirs/autres-loisirs/sainte-maxime/plage-de-la-nartelle-4613688/','km','Pavillon bleu'),
    ('Centre-ville','Sainte-Maxime','https://www.sainte-maxime.com/fr/loisirs/plage-du-centre-ville-4613690/','km','Pavillon bleu'),
    ('Bonnegrace Kennedy','Six-Fours-Les-Plages','https://www.gralon.net/tourisme/plages-france/plage-plage-bonnegrace-kennedy-poste-de-secours-2916.htm','km','Pavillon bleu'),
    ('Le Cros','Six-Fours-Les-Plages','https://www.plages.tv/detail/plage-du-cros-six-fours-les-plages-83140','km','Pavillon bleu'),
    ('La Coudouliere','Six-Fours-Les-Plages','https://www.plages.tv/detail/plage-de-la-coudouliere-six-fours-les-plages-83140','km','Pavillon bleu'),
    ('Les Roches Brunes','Six-Fours-Les-Plages','https://www.plages.tv/detail/plage-des-roches-brunes-six-fours-les-plages-83140','km','Pavillon bleu'),
    ('Mistral','Toulon','https://www.plages.tv/detail/plage-du-mourillon-anse-les-pins-de-la-source-mistral-et-lido--toulon-83000','km','Pavillon bleu'),
    ('Plage des Pins','Toulon','https://www.plages.tv/detail/plage-du-mourillon-anse-les-pins-de-la-source-mistral-et-lido--toulon-83000','km','Pavillon bleu'),
    ('Plage du Lido','Toulon','https://www.plages.tv/detail/plage-du-mourillon-anse-les-pins-de-la-source-mistral-et-lido--toulon-83000','km','Pavillon bleu'),
    ('Plage de la Source','Toulon','https://www.plages.tv/detail/plage-du-mourillon-anse-les-pins-de-la-source-mistral-et-lido--toulon-83000','km','Pavillon bleu')
    ";

    $connexion->exec($insert);
  }



  public function commentaires()
  {
    $connexion = $this->connexionbdd();
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
  }


  public function notation()
  {

    $connexion = $this->connexionbdd();

    // Création de la table da_vote_plage dans la base var_nature

    $nom_table3 = 'da_vote_plage';

    $table3 = "CREATE TABLE IF NOT EXISTS $nom_table3 (
  vote_plage_id INT PRIMARY KEY AUTO_INCREMENT,
  vote_plage_note FLOAT NOT NULL,
  vote_plage_lieu_id INT NOT NULL
)";

    $connexion->exec($table3);


    if (isset($_REQUEST)) {

      $plage_id =  $_REQUEST['id'];
      $note = $_REQUEST['note'];

      /*********************/

      $req1 = $connexion->prepare("INSERT INTO da_vote_plage (vote_plage_note, vote_plage_lieu_id) VALUES (:vote_plage_note, :vote_plage_lieu_id)");

      $req1->execute(array(
        'vote_plage_note' => $note,
        'vote_plage_lieu_id' => $plage_id
      ));


      /************************/

      $req2 = $connexion->prepare("SELECT vote_plage_note FROM da_vote_plage WHERE vote_plage_lieu_id=:vote_plage_lieu_id");

      $req2->execute(array(
        'vote_plage_lieu_id' => $plage_id
      ));

      $note_total = 0;
      $moyenne = 0;
      $nombre_de_votant = 0;
      while ($resultat = $req2->fetchObject()) {

        $note_total += $resultat->vote_plage_note;
        $nombre_de_votant += 1;
      }

      if ($nombre_de_votant >= 1) {
        $moyenne = round($note_total / $nombre_de_votant, 1);
      }

      $insert2 = "UPDATE `da_liste_plage` SET `liste_plage_note_moyenne` = $moyenne, `liste_plage_votre_avis` = $note, `liste_plage_nombre_de_vote` = $nombre_de_votant WHERE `da_liste_plage`.`liste_plage_id` = $plage_id ";

      $connexion->exec($insert2);
    }
  }
}
