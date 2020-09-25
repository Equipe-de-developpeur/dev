<?php

class reponseCom {
    protected $parentID;
    //commentaire_id du commentaire parent
    protected $portID;
    //lieu_id de l'emplacement du commentaire

    public function __construct($n, $o){
        $this->parentID = $n;
        $this->portID = $o;
    }

    public function getParent() {
        return $this->parentID;
    }

    public function getPort() {
        return $this->portID;
    }
}

?>