<div class="ligne3">
  <div class="moyenne">
    <p><span>Note moyenne (nombre de vote :<?= $nombre_de_vote ?>)</span></p>
    <div class="test1">
      <?php if ($note_moyenne == 0) { ?>

        <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
        <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
        <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
        <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
        <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">

      <?php }
      if ($note_moyenne < 1.5 && $note_moyenne > 0) { ?>

        <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
        <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
        <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
        <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
        <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">

      <?php }
      if ($note_moyenne >= 1.5 && $note_moyenne <= 2.2) { ?>

        <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
        <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
        <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
        <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
        <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">

      <?php }
      if ($note_moyenne > 2.2 && $note_moyenne <= 3) { ?>

        <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
        <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
        <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
        <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">
        <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">

      <?php }
      if ($note_moyenne > 3 && $note_moyenne <= 4) { ?>
        <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
        <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
        <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
        <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
        <img class="dauph" src="img/DauphinGris.png" alt="Dauphin gris">

      <?php }
      if ($note_moyenne > 4) { ?>
        <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
        <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
        <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
        <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">
        <img class="dauph" src="img/DauphinBleu.png" alt="Dauphin bleu">

      <?php } ?>

    </div>
  </div>

  <div class="avis">
    <p><span>Votre avis :</span></p>

    <?php if (isset($_SESSION['utilisateur_id'])) {?>
    <!-- note = 0 (pas encore de vote) -->
    <?php if ($votre_avis == 0) { ?>

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

      <?php }


    /* note = 1 */

    if ($votre_avis == 1) { ?>

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
        <?php }

      /* note = 2 */

      if ($votre_avis == 2) { ?>

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
          <?php }

        /* note = 3 */

        if ($votre_avis == 3) { ?>

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
            <?php }

          /* note = 4 */

          if ($votre_avis == 4) { ?>

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
              <?php }

            /* note = 5 */

            if ($votre_avis == 5) { ?>

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
                <?php } }else {
                  echo('Vous devez être connecter pour voter');
                }?>