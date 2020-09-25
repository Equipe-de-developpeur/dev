<?php

class reponseShow extends reponseGet {

    public function getShow() { ?>
        <div class="row">
            <!-- Affichage nom utilisateur -->
            <div class="col col-6">
                <?php
                    echo $this->getPseudo();
                ?>
            </div>
            <!-- Affichage date de publication -->
            <div class="col col-6 text-right">  
                <small><?php echo $this->getTime(); ?></small>
            </div>
        </div>
        <!-- Affichage du commentaire -->
        <div class="row">
            <div class="col"><?php echo $this->getComment(); ?></div>
        </div>
        <!-- Affichage du fichier envoyé -->
        <?php
        if($this->getFile() != NULL) { ?>
            <div class="row">
                <div class="col text-right">
                    <small><a class="policeColor" href="fichier/<?php echo $lieuID . '/' . $this->getFile(); ?>" target="_blank" download><?php echo $this->getFile(); ?></a></small>
                </div>
            </div>
        <?php }
    }
}

?>