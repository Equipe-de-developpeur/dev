<?php

class reponseGet {

    private $j;
    //Récupération des commentaires à afficher

    public function __construct($p) {
        $this->j = $p;
    }

    public function getJ() {
        return $this->j;
    }

    public function getPseudo() {
        return $this->j['commentaire_port_utilisateur_pseudo'];
    }

    public function getTime() {
        return $this->j['commentaire_port_temps'];
    }

    public function getComment() {
        return $this->j['commentaire_port_commentaire'];
    }

    public function getFile() {
        return $this->j['commentaire_port_fichier'];
    }
}

?>