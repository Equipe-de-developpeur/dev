<!DOCTYPE html>
<html lang="fr_fr">

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>

    <body>
        <?php
        include_once 'element/MJ_mer_connexionbdd.php';

        //Collecte des données
        $sql = $pdo->prepare("SELECT * FROM `jm_mer_liste_port`");
        $sql->execute();
        $liste = $sql->fetchALL(PDO::FETCH_ASSOC);

        //Boucle d'affichage des données
        foreach ($liste as $i){ ?>

            <p>
                <!-- Affichage Nom du lieu-->
                <a type="button" class="" data-toggle="modal" data-target="#Port<?php echo $i['lieu_id']; ?>">
                    <?php echo $i['lieu']; ?>
                </a>

                <?php 
                //Condition pour l'affichage du logo port propre
                switch($i['label_pp']) {
                    case 1: 
                    //Condition si le port est juste engagé?>
                            <img src="img/1pp.svg" alt="Engagé Port Propre" width="50" height="50">
                        <?php break;
                    case 2: 
                    //Condition si le port est certifié?>
                            <img src="img/2pp.svg" alt="Engagé Port Propre" width="50" height="50">
                        <?php break;
                }
                ?>

                <?php 
                //Condition pour l'affichage du logo actifs en biodiversité 
                switch($i['label_aeb']) {
                    case 1: 
                    //Condition si le port est juste engagé?>
                            <img src="img/1aeb.svg" alt="Engagé Port Propre" width="50" height="50">
                        <?php break;
                    case 2: 
                    //Condition si le port est certifié?>
                            <img src="img/2aeb.svg" alt="Engagé Port Propre" width="50" height="50">
                        <?php break;
                }
                ?>

                <!-- Modal d'affichage contanant d'avantage d'information sur le lieu -->
                <div class="modal fade" id="Port<?php echo $i['lieu_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Titre de la modal -->
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $i['lieu']; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <!-- Contenu de la modal-->
                            <div class="modal-body">
                                Site officiel : <a href="<?php echo $i['lien']?>" target="_blank">Lien</a><br>
                                Localisation : <?php echo $i['localisation'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </p>

        <?php
        }
        ?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>