<?php
require_once("DA_mer_plage_liste_bdd_MODEL.php");


class DA_mer_plage_liste_commentaires_MODEL extends DA_mer_plage_liste_bdd_MODEL
{
  public $NewCommentaires;
  public $commentaires_plage_noms;
  public $commentaires_plage_lieux;
  public $commentaires_plage_id_parent;


  public function CreationTableCommentaires()
  {
    // Création de la table da_commentaires_plage dans la base var_nature
    $connexion = $this->connexionbdd();

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

  public function RécupérationCommentaires()
  {
    // Récupération des données du formulaire
    $this->NewCommentaires = htmlspecialchars($_POST['NewCommentaires']);
    $this->commentaires_plage_noms = htmlspecialchars($_POST['nom']);
    $this->commentaires_plage_lieux = htmlspecialchars($_POST['lieu']);
    $this->commentaires_plage_id_parent = $_POST['commentaires_plage_id_parent'];
  }


  public function Enregistrement() 
  {
    //Enregistrement du commentaire dans la base de donnée
   
    //$connexion = $this->Récupération();

    $bdd2 = new DA_mer_plage_liste_bdd_MODEL;
    $connexion2 = $bdd2->connexionbdd();
    $req2 = $connexion2->prepare("INSERT INTO da_commentaires_plage (commentaires_plage_textes, commentaires_plage_noms, commentaires_plage_lieux, commentaires_plage_id_parent) VALUES(:NewCommentaires, :commentaire_plage_noms, :commentaire_plage_lieux, :commentaires_plage_id_parent)");

    if ($req2->execute(array(
      'NewCommentaires' => $this->NewCommentaires,
      'commentaire_plage_noms' => $this->commentaires_plage_noms,
      'commentaire_plage_lieux' => $this->commentaires_plage_lieux,
      'commentaires_plage_id_parent' => $this->commentaires_plage_id_parent,
    ))) {

      $id_comm = $connexion2->lastInsertId('da_commentaires_plage');
      header('Location: ../DA_mer_plage_liste.php#' . $id_comm);

    } else {
      echo "Problème d'enregistrement : <br/>";
      print_r($req2->errorInfo());
    }
  }
}
