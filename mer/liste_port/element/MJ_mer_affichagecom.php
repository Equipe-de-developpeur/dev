<div class="commentaire p-1">
    <div class="row">
        <!-- Affichage nom utilisateur -->
        <div class="col col-6">
            <?php
                $userID = $j['commentaire_port_utilisateur_id'];
                $userJoin = "SELECT `wd_utilisateur`.`utilisateur_pseudo`
                FROM `wd_utilisateur`
                INNER JOIN `jm_mer_commentaire_port` ON `jm_mer_commentaire_port`.`commentaire_port_utilisateur_id` = `wd_utilisateur`.`utilisateur_id`
                WHERE `commentaire_port_utilisateur_id` = $userID";
                $user = $pdo->exec($userJoin);
                echo $user;
            ?>
        </div>
        <!-- Affichage date de publication -->
        <div class="col col-6 text-right">  
            <small><?php echo $j['commentaire_port_temps']; ?></small>
        </div>
    </div>
    <!-- Affichage du commentaire -->
    <div class="row">
        <div class="col"><?php echo $j['commentaire_port_commentaire']; ?></div>
    </div>
    <!-- Affichage du fichier envoyé -->
    <?php
    if($j['commentaire_port_fichier'] != NULL) {
        ?>
        <div class="row">
            <div class="col text-right">
                <small><a class="policeColor" href="fichier/<?php echo $lieuID . '/' . $j['commentaire_port_fichier']; ?>" target="_blank"><?php echo $j['commentaire_port_fichier']; ?></a></small>
            </div>
        </div>
        <?php
    }
    ?>
</div>