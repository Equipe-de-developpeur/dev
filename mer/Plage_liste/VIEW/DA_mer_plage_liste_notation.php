<?php
echo('

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