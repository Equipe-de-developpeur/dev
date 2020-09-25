<?php

class reponseForm extends reponseCom {
    public function getForm() {
        //Formulaire de réponse ?>
        <form action="MJ_mer_listeport.php" method="post" class="commentaire" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $this->getPort(); ?>">
            <input type="hidden" id="username<?php echo $this->getPort() . '+' . $this->getParent(); ?>" name="username" value="<?php echo $_SESSION['utilisateur_pseudo']?>">
            <input type="hidden" name="parentId" value="<?php echo $this->getParent(); ?>">
            <label for="commentaire<?php echo $this->getPort() . '+' . $this->getParent(); ?>">Réponse&nbsp:</label>
            <textarea id="commentaire<?php echo $this->getPort() . '+' . $this->getParent(); ?>" name="commentaire" rows="3" size="500" maxlenght="500" required></textarea><br>
            <label for="file<?php echo $this->getPort() . '+' . $this->getParent(); ?>">Pièce Jointe&nbsp:</label>
            <input type="file" id="file<?php echo $this->getPort() . '+' . $this->getParent();?>" name="file"><br>
            <input type="submit" value="Envoyer">
        </form>

        <?php
    }
}

?>