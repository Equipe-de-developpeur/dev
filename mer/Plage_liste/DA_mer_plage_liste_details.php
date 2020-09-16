<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed&display=swap" rel="stylesheet">

  <link rel="stylesheet" style="text/css" href="css/DA_mer_plage_liste_details.css">

  <title>Plage liste détails</title>
</head>

<body>

  <?php include "DA_mer_plage_liste_bdd.php";

  $id = $_REQUEST['id'];
  $req = $connexion->query("SELECT * FROM da_liste_plage WHERE `liste_plage_id`=$id"); ?>


  <?php while ($donnees = $req->fetch()) {
    // Enregistrement des données sous forme de variables
    $liste_plage_id = $donnees['liste_plage_id'];
    $lieux = $donnees['liste_plage_lieux'];
    $villes = $donnees['liste_plage_villes'];
    $liens = $donnees['liste_plage_liens'];
    $distances = $donnees['liste_plage_distances'];
    $actions = $donnees['liste_plage_actions'];
    $note_moyenne = $donnees['liste_plage_note_moyenne'];
    $votre_avis = $donnees['liste_plage_votre_avis'];

    $moyenne = 3.9;

    echo ('
    <section class="details">

    <h2>' . $lieux . '</h2>
  
    <div class="ligne1">
      <div>
        <p><span>Ville :</span></p>
        <p>' . $villes . '</p>
      </div>
      <div>
        <p><span>Lien :</span></p>
        <a href="' . $liens . '" target="_blank" rel="noopener noreferrer">Ici</a>
      </div>
    </div>
  
    <div class="ligne2">
      <div>
        <p><span>Distance :</span></p>
        <p>' . $distances . '</p>
      </div>
      <div>
        <p><span>Actions :</span></p>
        <p>' . $actions . '</p>
      </div>
    </div>
  
    <div class="ligne3">
      <div class="moyenne">
        <p><span>Note moyenne :</span></p>
        <div class="test1">');
        if($moyenne<=1){
        echo('
          <img src="img/DauphinBleu.png" alt="Dauphin bleu">
          <img src="img/DauphinGris.png" alt="Dauphin gris">
          <img src="img/DauphinGris.png" alt="Dauphin gris"> 
          <img src="img/DauphinGris.png" alt="Dauphin gris">
          <img src="img/DauphinGris.png" alt="Dauphin gris">
        ');}
        if($moyenne>1 && $moyenne<=2){
          echo('
            <img src="' . $note_moyenne . '" alt="Dauphin bleu">
            <img src="' . $note_moyenne . '" alt="Dauphin bleu">
            <img src="' . $votre_avis . '" alt="Dauphin gris">
            <img src="' . $votre_avis . '" alt="Dauphin gris">
            <img src="' . $votre_avis . '" alt="Dauphin gris">

          ');}
          if($moyenne>2 && $moyenne<=3){
            echo('
              <img src="' . $note_moyenne . '" alt="Dauphin bleu">
              <img src="' . $note_moyenne . '" alt="Dauphin bleu">
              <img src="' . $note_moyenne . '" alt="Dauphin bleu">
              <img src="' . $votre_avis . '" alt="Dauphin gris">
              <img src="' . $votre_avis . '" alt="Dauphin gris">
            ');}
            if($moyenne>3 && $moyenne<=4){
              echo('
                <img src="' . $note_moyenne . '" alt="Dauphin bleu">
                <img src="' . $note_moyenne . '" alt="Dauphin bleu">
                <img src="' . $note_moyenne . '" alt="Dauphin bleu">
                <img src="' . $note_moyenne . '" alt="Dauphin bleu">
                <img src="' . $votre_avis . '" alt="Dauphin gris">
    
              ');}
              if($moyenne>4){
                echo('
                  <img src="' . $note_moyenne . '" alt="Dauphin bleu">
                  <img src="' . $note_moyenne . '" alt="Dauphin bleu">
                  <img src="' . $note_moyenne . '" alt="Dauphin bleu">
                  <img src="' . $note_moyenne . '" alt="Dauphin bleu">
                  <img src="' . $note_moyenne . '" alt="Dauphin bleu">
                ');}

        echo('
        </div>
      </div>
  
      <div class="avis">
        <p><span>Votre avis :</span></p>
            <div class="test4">
              <form ation="" method="post">
                <div class="note">
         
            <label for="note1" class="labelButon"><div class="fond"></div></label>
            <input class="c" type="radio" name="note" id="note1" value="1">
             
 
            <label for="note2" class="labelButon"><img class="A2" src="' . $votre_avis.'" alt="Dauphin gris"></label>
            <input class="c" type="radio" name="note" id="note2" value="2">
             
 
            <label for="note3" class="labelButon"><img class="A2" src="' . $votre_avis.'" alt="Dauphin gris"></label>
            <input class="c" type="radio" name="note" id="note3" value="3">
             
 
            <label for="note4" class="labelButon"><img class="A2" src="' . $votre_avis.'" alt="Dauphin gris"></label>
            <input class="c" type="radio" name="note" id="note4" value="4">
             
 
            <label for="note5" class="labelButon"><img class="A2" src="' . $votre_avis.'" alt="Dauphin gris"></label>
            <input class="c" type="radio" name="note" id="note5" value="5">
             
         
    </div>
 
    <input  class="iinput" type="Submit" value="Commander" name="commander">
</form>

        </div>
      </div>
      
    </div>
    <br>
  </section>

');
  }
  ?>



  <a href="../Plage_liste/DA_mer_plage_liste.php" rel="noopener noreferrer">Retour</a>

</body>

</html>