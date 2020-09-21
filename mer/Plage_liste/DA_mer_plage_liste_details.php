<!DOCTYPE html>
<?php 	include "../espace_membre/header.php"; ?>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed&display=swap" rel="stylesheet">

  <link rel="stylesheet" style="text/css" href="css/DA_mer_plage_liste_details.css">

  <title>Plage liste détails</title>
</head>

<body>

  <?php

  include "DA_mer_plage_liste_bdd.php";
  include "DA_mer_plage_liste_detail_vote.php";

  $id = $_REQUEST['id'];
  $req = $connexion->query("SELECT * FROM da_liste_plage WHERE `liste_plage_id`=$id");

  $plageliste = new PlageListe;
  if (isset($_REQUEST['VOTER'])) {
    $plageliste->notation();
	?><script> location.replace("<?php echo $_SERVER['HTTP_REFERER']; ?>"); </script><?php
 //Rafraichir la page si il y a 1 vote existant
  }
  while ($donnees = $req->fetch()) {
    // Enregistrement des données sous forme de variables
    $liste_plage_id = $donnees['liste_plage_id'];
    $lieux = $donnees['liste_plage_lieux'];
    $villes = $donnees['liste_plage_villes'];
    $liens = $donnees['liste_plage_liens'];
    $distances = $donnees['liste_plage_distances'];
    $actions = $donnees['liste_plage_actions'];
    $note_moyenne = $donnees['liste_plage_note_moyenne'];
    $votre_avis = $donnees['liste_plage_votre_avis'];
    $nombre_de_vote = $donnees['liste_plage_nombre_de_vote'];


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
        <p><span>Note moyenne (nombre de vote :' . $nombre_de_vote . ' )</span></p>
        <div class="test1">');
    if ($note_moyenne == 0) {
      echo ('
          <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
            <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
            <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris"> 
            <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
            <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
          ');
    }
    if ($note_moyenne <= 1.5 && $note_moyenne > 0) {
      echo ('
          <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
          <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
          <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris"> 
          <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
          <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
        ');
    }
    if ($note_moyenne > 1.5 && $note_moyenne <= 2.2) {
      echo ('
          <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
          <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
            <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
            <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
            <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">

          ');
    }
    if ($note_moyenne > 2.2 && $note_moyenne <= 3) {
      echo ('
            <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
            <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
            <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
              <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
              <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
            ');
    }
    if ($note_moyenne > 3 && $note_moyenne <= 4) {
      echo ('
              <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
              <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
              <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
              <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
                <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
    
              ');
    }
    if ($note_moyenne > 4) {
      echo ('
                <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
                <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
                <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
                <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
                <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
                ');
    }



    echo ('
        </div>
      </div>
  
      <div class="avis">
        <p><span>Votre avis :</span></p>');

    /* note = 0 (pas encore de vote) */

    if ($votre_avis == 0) {
      echo ('
          <div class="test4">
          <form action="" method="post">
            <div class="note2">

            <input type="hidden" name="idLocation" value="$lieuID">
     
        <label for="note1" class="labelButon"><img class="A2" class="dauph" src="img/DauphinGris.png" alt="Dauphin gris"></label>
        <input class="c" type="radio" name="note" id="note1" value="1">
         
        <label for="note2" class="labelButon"><img class="A2" class="dauph" src="img/DauphinGris.png" alt="Dauphin gris"></label>
        <input class="c" type="radio" name="note" id="note2" value="2">
         
        <label for="note3" class="labelButon"><img class="A2" class="dauph" src="img/DauphinGris.png" alt="Dauphin gris"></label>
        <input class="c" type="radio" checked name="note" id="note3" value="3">
         
        <label for="note4" class="labelButon"><img class="A2" class="dauph" src="img/DauphinGris.png" alt="Dauphin gris"></label>
        <input class="c" type="radio" name="note" id="note4" value="4">
         
        <label for="note5" class="labelButon"><img class="A2" class="dauph" src="img/DauphinGris.png" alt="Dauphin gris"></label>
        <input class="c" type="radio" name="note" id="note5" value="5">
         
     
</div>

<input type="Submit" value="VOTER" name="VOTER">
</form>
          ');
    }


    /* note = 1 */

    if ($votre_avis == 1) {
      echo ('
          <div class="test4">
          <form action="" method="post">
            <div class="note2">

            <input type="hidden" name="idLocation" value="$lieuID">
     
        <label for="note1" class="labelButon"><img class="A2" src="img/DauphinBleu.png" alt="Dauphin Bleu"></label>
        <input class="c" type="radio" checked name="note" id="note1" value="1">
         
        <label for="note2" class="labelButon"><img class="A2" src="img/DauphinGris.png" alt="Dauphin gris"></label>
        <input class="c" type="radio" name="note" id="note2" value="2">
         
        <label for="note3" class="labelButon"><img class="A2" src="img/DauphinGris.png" alt="Dauphin gris"></label>
        <input class="c" type="radio" name="note" id="note3" value="3">
         
        <label for="note4" class="labelButon"><img class="A2" src="img/DauphinGris.png" alt="Dauphin gris"></label>
        <input class="c" type="radio" name="note" id="note4" value="4">
         
        <label for="note5" class="labelButon"><img class="A2" src="img/DauphinGris.png" alt="Dauphin gris"></label>
        <input class="c" type="radio" name="note" id="note5" value="5">
         
     
</div>

<input type="Submit" value="MODIFIER" name="VOTER">
</form>
          ');
    }

    /* note = 2 */

    if ($votre_avis == 2) {
      echo ('
          <div class="test4">
          <form action="" method="post">
            <div class="note2">

            <input type="hidden" name="idLocation" value="$lieuID">
     
            <label for="note1" class="labelButon"><img class="A2" src="img/DauphinBleu.png" alt="Dauphin Bleu"></label>
            <input class="c" type="radio" name="note" id="note1" value="1">
         
            <label for="note2" class="labelButon"><img class="A2" src="img/DauphinBleu.png" alt="Dauphin Bleu"></label>
            <input class="c" type="radio" checked name="note" id="note2" value="2">
         
        <label for="note3" class="labelButon"><img class="A2" src="img/DauphinGris.png" alt="Dauphin gris"></label>
        <input class="c" type="radio" name="note" id="note3" value="3">
         
        <label for="note4" class="labelButon"><img class="A2" src="img/DauphinGris.png" alt="Dauphin gris"></label>
        <input class="c" type="radio" name="note" id="note4" value="4">
         
        <label for="note5" class="labelButon"><img class="A2" src="img/DauphinGris.png" alt="Dauphin gris"></label>
        <input class="c" type="radio" name="note" id="note5" value="5">
         
     
</div>

<input type="Submit" value="MODIFIER" name="VOTER">
</form>
          ');
    }

    /* note = 3 */

    if ($votre_avis == 3) {
      echo ('
          <div class="test4">
          <form action="" method="post">
            <div class="note2">

            <input type="hidden" name="idLocation" value="$lieuID">
     
            <label for="note1" class="labelButon"><img class="A2" src="img/DauphinBleu.png" alt="Dauphin Bleu"></label>
            <input class="c" type="radio" name="note" id="note1" value="1">
         
            <label for="note2" class="labelButon"><img class="A2" src="img/DauphinBleu.png" alt="Dauphin Bleu"></label>
            <input class="c" type="radio" name="note" id="note2" value="2">
         
            <label for="note3" class="labelButon"><img class="A2" src="img/DauphinBleu.png" alt="Dauphin Bleu"></label>
            <input class="c" type="radio" checked name="note" id="note3" value="3">
         
        <label for="note4" class="labelButon"><img class="A2" src="img/DauphinGris.png" alt="Dauphin gris"></label>
        <input class="c" type="radio" name="note" id="note4" value="4">
         
        <label for="note5" class="labelButon"><img class="A2" src="img/DauphinGris.png" alt="Dauphin gris"></label>
        <input class="c" type="radio" name="note" id="note5" value="5">
         
     
</div>

<input type="Submit" value="MODIFIER" name="VOTER">
</form>
          ');
    }

    /* note = 4 */

    if ($votre_avis == 4) {
      echo ('
          <div class="test4">
          <form action="" method="post">
            <div class="note2">

            <input type="hidden" name="idLocation" value="$lieuID">
     
            <label for="note1" class="labelButon"><img class="A2" src="img/DauphinBleu.png" alt="Dauphin Bleu"></label>
            <input class="c" type="radio" name="note" id="note1" value="1">
         
            <label for="note2" class="labelButon"><img class="A2" src="img/DauphinBleu.png" alt="Dauphin Bleu"></label>
            <input class="c" type="radio" name="note" id="note2" value="2">
         
            <label for="note3" class="labelButon"><img class="A2" src="img/DauphinBleu.png" alt="Dauphin Bleu"></label>
            <input class="c" type="radio" name="note" id="note3" value="3">
         
            <label for="note4" class="labelButon"><img class="A2" src="img/DauphinBleu.png" alt="Dauphin Bleu"></label>
            <input class="c" type="radio" checked name="note" id="note4" value="4">
         
        <label for="note5" class="labelButon"><img class="A2" src="img/DauphinGris.png" alt="Dauphin gris"></label>
        <input class="c" type="radio" name="note" id="note5" value="5">
         
     
</div>

<input type="Submit" value="MODIFIER" name="VOTER">
</form>
          ');
    }

    /* note = 5 */

    if ($votre_avis == 5) {
      echo ('
          <div class="test4">
          <form action="" method="post">
            <div class="note2">

            <input type="hidden" name="idLocation" value="$lieuID">
     
            <label for="note1" class="labelButon"><img class="A2" src="img/DauphinBleu.png" alt="Dauphin Bleu"></label>
            <input class="c" type="radio" name="note" id="note1" value="1">
         
            <label for="note2" class="labelButon"><img class="A2" src="img/DauphinBleu.png" alt="Dauphin Bleu"></label>
            <input class="c" type="radio" name="note" id="note2" value="2">
         
            <label for="note3" class="labelButon"><img class="A2" src="img/DauphinBleu.png" alt="Dauphin Bleu"></label>
            <input class="c" type="radio" name="note" id="note3" value="3">
         
            <label for="note4" class="labelButon"><img class="A2" src="img/DauphinBleu.png" alt="Dauphin Bleu"></label>
            <input class="c" type="radio" name="note" id="note4" value="4">
         
            <label for="note5" class="labelButon"><img class="A2" src="img/DauphinBleu.png" alt="Dauphin Bleu"></label>
            <input class="c" type="radio" checked name="note" id="note5" value="5">
         
     
</div>

<input type="Submit" value="MODIFIER" name="VOTER">
</form>
          ');
    }
    echo ('


        </div>
      </div>
      
    </div>
    <br>
  </section>

');
  }
  ?>



  <a href="../Plage_liste/DA_mer_plage_liste.php" rel="noopener noreferrer">Retour</a>
<?php 	include "../espace_membre/footer.php"; ?>
</body>

</html>