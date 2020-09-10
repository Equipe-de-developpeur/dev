<div class="commentaire p-1">
    <div class="row">
        <!-- Affichage nom utilisateur -->
        <div class="col col-6">
            <?php echo $j['commentaire_port_username']; ?>
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
            <div class="col align-self-end">
                <a class="fichier" href="fichier/<?php echo $lieuID . '/' . $j['commentaire_port_fichier']; ?>"><?php echo $j['commentaire_port_fichier']; ?></a>
            </div>
        </div>
        <?php
    }
    ?>
</div>