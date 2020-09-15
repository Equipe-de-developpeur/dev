<?php
if(isset($_SESSION['utilisateur_id']) && $_SESSION['utilisateur_id'] != NULL){ ?>
    
    <form action="MJ_mer_listeport.php" method="post" class="commentaire p-1" enctype="multipart/form-data">
        <fieldset>
            <legend>Laissez un commentaire&nbsp:</legend>
            <input type="hidden" name="id" value="<?php echo $lieuID ?>">
            <input type="hidden" id="username<?php echo $lieuID ?>" name="username" value="<?php echo $_SESSION['utilisateur_pseudo']?>"><br>
            <label for="commentaire<?php echo $lieuID ?>">Commentaire :</label>
            <textarea id="commentaire<?php echo $lieuID ?>" name="commentaire" rows="3" size="500" maxlenght="500" required>
            </textarea><br>
            <label for="file<?php echo $lieuID ?>">Pièce Jointe :</label>
            <input type="file" id="file<?php echo $lieuID ?>" name="file"><br>
            <input type="submit" value="Envoyer">
        </fieldset>
    </form>
<?php } 
else {?>
    <p class="demandeConnexion p-1">Inscrivez-vous pour pouvoir donner votre avis sur ce port !</p>
<?php } ?>