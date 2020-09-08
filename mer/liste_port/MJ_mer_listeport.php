<!DOCTYPE html>
<html lang="fr_fr">

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="css/MJ_mer_listeport.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php header('Set-Cookie: cross-site-cookie=name; SameSite=None; Secure'); ?>
    </head>

    <body>
        <?php
        include_once 'element/MJ_mer_connexionbdd.php';
        include_once "element/MJ_mer_creationcom.php";
        include "element/MJ_mer_traitementcom.php";
        include "element/MJ_mer_envoiefichier.php";
        ?>
        <div class="lport container-fluid">
            <div class="cadre_critere py-1 px-1">
                <form action="MJ_mer_listeport.php" method="post">
                    <label for="critere">Classez par :</label>
                    <select id="critere" name="critere">
                        <option value="nom">Nom</option>
                        <option value="localisation">Lieu</option>
                        <option value="pp">Label Port Propres</option>
                        <option value="aeb">Label Actifs en Biodiversité</option>
                        <option value="pb">Label Pavillon Bleu</option>
                    </select>
                    <input class="mt-1" type="submit" value="Classer">
                </form>
                <?php
                include 'element/MJ_mer_classement.php';
                ?>
            </div>

            <div class="affichage px-1">

            <?php
            //Collecte des données
            $liste = $sql->fetchALL(PDO::FETCH_ASSOC);

            //Boucle d'affichage des données
            foreach ($liste as $i){ 

                //Récupération ID Lieu
                $lieuID = $i['lieu_id'];

            ?>

                <!-- Affichage Nom du lieu--> 
                    <h5><a type="button" class="lien pt-1" data-toggle="modal" data-target="#Port<?php echo $lieuID; ?>">
                        <?php echo $i['lieu']; ?>
                    </a></h5>

                    <p class="mb-1">Emplacement : <?php echo $i['localisation'] ?></p>

                    <p class="mb-0 pb-1">
                        <?php include 'element/MJ_mer_logoaction.php' ?>
                    </p>

                    <!-- Modal d'affichage contanant d'avantage d'information sur le lieu -->
                    <div class="modal fade" id="Port<?php echo $lieuID; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
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
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md">
                                                <p>
                                                    <a class="lien" href="<?php echo $i['lien']?>" target="_blank">Site Officiel</a><br>
                                                    Localisation : <?php echo $i['localisation'] ?> <br>
                                                    <?php include 'element/MJ_mer_logoaction.php' ?> <br>
                                                    <!-- Emplacement Vote -->
                                                </p>
                                            </div>
                                            <div class="col-md">
                                                <iframe class="responsive-iframe" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $i['carte']?>" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=43.17920&amp;mlon=5.68141#map=17/43.17920/5.68141" target="_blank">Afficher une carte plus grande</a></small>
                                            </div>
                                        </div>
                                    <!-- Commentaire -->
                                        <div class="esp_com row">
                                            <!-- Affichage Commentaire -->
                                            <?php 
                                            //Collecte des commentaires
                                            $sqlcom = $pdo->prepare("SELECT * FROM `jm_mer_commentaire_port` WHERE `lieu_id` = $lieuID");
                                            $sqlcom->execute();
                                            $listecom = $sqlcom->fetchALL(PDO::FETCH_ASSOC);
                                        
                                            //Affichage des commentaires du lieu
                                            foreach ($listecom as $j){ 
                                                include "element/MJ_mer_affichagecom.php";
                                            }
                                            ?>
                                            <!-- Formulaire Commentaire -->
                                            <form action="MJ_mer_listeport.php" method="post" class="commentaire p-1" enctype="multipart/form-data">
                                                <fieldset>
                                                    <legend>Laissez un commentaire&nbsp:</legend>
                                                    <input type="hidden" name="id" value="<?php echo $lieuID ?>">
                                                    <label for="username">Nom :</label>
                                                    <input type="text" id="username" name="username" size ="30" maxlenght="30" required><br>
                                                    <label for="commentaire">Commentaire :</label>
                                                    <textarea id="commentaire" name="commentaire" rows="3" size="500" maxlenght="500" required>
                                                    </textarea><br>
                                                    <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                                                    <label for="file">Pièce Jointe :</label>
                                                    <input type="file" id="file" name="file"><br>
                                                    <input type="submit" value="Envoyer">
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
            }
            ?>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>