<?php



class PlageListe
{
  
  public function notation()
  {
    
    include "DA_mer_plage_liste_bdd.php";

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
      $nombre_de_votant=0;
      while($resultat=$req2->fetchObject()){

      $note_total += $resultat->vote_plage_note;
      $nombre_de_votant += 1;
      }
      
      if($nombre_de_votant>=1){
        $moyenne = round($note_total/$nombre_de_votant,1);
      }
      
        $insert2 ="UPDATE `da_liste_plage` SET `liste_plage_note_moyenne` = $moyenne, `liste_plage_votre_avis` = $note, `liste_plage_nombre_de_vote` = $nombre_de_votant WHERE `da_liste_plage`.`liste_plage_id` = $plage_id ";

      $connexion->exec($insert2);
      

    }
  }
}
