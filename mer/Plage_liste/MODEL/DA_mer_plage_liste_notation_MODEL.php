<?php
require_once("DA_mer_plage_liste_bdd_MODEL.php");


class DA_mer_plage_liste_notation_MODEL extends DA_mer_plage_liste_bdd_MODEL
{

  public $plage_id;
  public $note;


  // Création de la table da_vote_plage dans la base var_nature

  public function CreationTableNotations()
  {
    $connexion = $this->connexionbdd();

    $nom_table3 = 'da_vote_plage';

    $table3 = "CREATE TABLE IF NOT EXISTS $nom_table3 (
      vote_plage_id INT PRIMARY KEY AUTO_INCREMENT,
      vote_plage_note FLOAT NOT NULL,
      vote_plage_lieu_id INT(99) NOT NULL
    )";

    $this->connexion->exec($table3);
  }



  // Récupération des votes

  public function RécupérationNotations()
  {

    if (isset($_REQUEST)) {

      $this->plage_id =  $_REQUEST['id'];
      $this->note = $_REQUEST['note'];
    }
  }

  // Inserssion des notes dans la table "da_vote_plage"

  public function InserssionNotations()
  {

    $req1 = $this->connexion->prepare("INSERT INTO da_vote_plage (vote_plage_note, vote_plage_lieu_id) VALUES (:vote_plage_note, :vote_plage_lieu_id)");

    $req1->execute(array(
      'vote_plage_note' => $this->note,
      'vote_plage_lieu_id' => $this->plage_id
    ));
  }


  // Mise à jour des notes

  public function MiseAJourNotations()
  {


    $req2 = $this->connexion->prepare("SELECT vote_plage_note FROM da_vote_plage WHERE vote_plage_lieu_id=:vote_plage_lieu_id");

    $req2->execute(array(
      'vote_plage_lieu_id' => $this->plage_id
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

    $insert2 = "UPDATE `da_liste_plage` SET `liste_plage_note_moyenne` = $moyenne, `liste_plage_votre_avis` = $this->note, `liste_plage_nombre_de_vote` = $nombre_de_votant WHERE `da_liste_plage`.`liste_plage_id` = $this->plage_id ";

    $this->connexion->exec($insert2);
  }
}
