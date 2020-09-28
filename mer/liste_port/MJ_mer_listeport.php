<!DOCTYPE html>

<html lang="fr_fr">

    <head>
        <link rel="stylesheet" href="css/MJ_mer_listeport.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php header('Set-Cookie: cross-site-cookie=name; SameSite=None; Secure'); ?>
		<?php include "../espace_membre/header.php"; ?>
    </head>

    <body class="bodyListePort">
        <?php
        
        include_once 'element/MJ_mer_connexionbdd.php';
        include_once "element/MJ_mer_creationtable.php";

        if (isset($_POST["username"])) {
            $ID = $_POST["id"];
        }

        include "element/MJ_mer_traitementpost.php";
        require "classes/MJ_mer_reponseCom.class.php";
        require "classes/MJ_mer_reponseForm.class.php";
        require "classes/MJ_mer_reponseGet.class.php";
        require "classes/MJ_mer_reponseShow.class.php";
        
        //Affichage message de réception
        if(isset($msg)){ ?>
            <div class="alert alert-light alert-dismissible fade show lport" role="alert">
                <?php echo $msg; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php    
        }
        ?>
        <!-- Formulaire de classement -->
        <div class="lport container-fluid">
            <div class="cadre_critere py-1 px-1">
                <form action="MJ_mer_listeport.php" method="post">
                    <label for="critere">Classez par :</label>
                    <select id="critere" name="critere">
                        <option value="nom">Nom</option>
                        <option value="localisation" <?php if(isset($_POST['critere'])) { if ($_POST['critere'] == "localisation") { echo "selected";}} ?>>Lieu</option>
                        <option value="pp" <?php if(isset($_POST['critere'])) { if ($_POST['critere'] == "pp") { echo "selected";}} ?>>Label Port Propres</option>
                        <option value="aeb" <?php if(isset($_POST['critere'])) { if ($_POST['critere'] == "aeb") { echo "selected";}} ?>>Label Actifs en Biodiversité</option>
                        <option value="pb" <?php if(isset($_POST['critere'])) { if ($_POST['critere'] == "pb") { echo "selected";}} ?>>Label Pavillon Bleu</option>
                        <option value="avis" <?php if(isset($_POST['critere'])) { if ($_POST['critere'] == "avis") { echo "selected";}} ?>>Vote</option>
                    </select>
                    <input class="mt-1" type="submit" value="Classer">
                </form>
            </div>

            <div class="affichage px-1">

            <?php
            //Collecte des données
            $liste = $sql->fetchALL(PDO::FETCH_ASSOC);

            //Boucle d'affichage des données
            foreach ($liste as $i){ 

                //Récupération ID Lieu
                $lieuID = $i['liste_port_lieu_id'];

            ?>

                <!-- Affichage Nom du lieu--> 
                    <h5><a type="button" class="lien pt-1" data-toggle="modal" data-target="#Port<?php echo $lieuID; ?>">
                        <?php echo $i['liste_port_lieu']; ?>
                    </a></h5>

                    <p class="mb-1">Emplacement : <?php echo $i['liste_port_localisation'] ?></p>

                    <p class="mb-0 pb-1">
                        <?php include 'element/MJ_mer_logoaction.php' ?>
                    </p>

                    <!-- Modal d'affichage contanant d'avantage d'information sur le lieu -->
                    <div class="modal fade" id="Port<?php echo $lieuID; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <!-- Titre de la modal -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $i['liste_port_lieu']; ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!-- Contenu de la modal-->
                                <div class="modal-body p-0">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md">
                                                <p>
                                                    <a class="lien" href="<?php echo $i['liste_port_lien']?>" target="_blank">Site Officiel</a><br>
                                                    Localisation : <?php echo $i['liste_port_localisation'] ?> <br>
                                                    <?php include 'element/MJ_mer_logoaction.php' ?> <br>
                                                    <?php include 'element/MJ_mer_vote.php' ?> <br>
                                                </p>
                                            </div>
                                            <div class="col-md">
                                                <iframe class="responsive-iframe" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $i['liste_port_carte']?>" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=43.17920&amp;mlon=5.68141#map=17/43.17920/5.68141" target="_blank">Afficher une carte plus grande</a></small>
                                            </div>
                                        </div>
                                    <!-- Commentaire -->
                                        <div class="esp_com row">
                                            <!-- Affichage Commentaire -->
                                            <?php 
                                            //Collecte des commentaires
                                            $sqlcom = $pdo->prepare("SELECT * FROM `jm_mer_commentaire_port` WHERE `commentaire_port_lieu_id` = $lieuID AND `commentaire_port_parent_id` IS NULL");
                                            $sqlcom->execute();
                                            $listecom = $sqlcom->fetchALL(PDO::FETCH_ASSOC);
                                        
                                            //Affichage des commentaires du lieu
                                            foreach ($listecom as $j){ 
                                                include "element/MJ_mer_affichagecom.php";
                                            }
                                            ?>
                                            <!-- Formulaire Commentaire -->
                                            <?php include "element/MJ_mer_formulairecom.php"; ?>
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
		<?php include "../espace_membre/footer.php"; ?>
    </body>
</html>