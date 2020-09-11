
<form action="insert_traitement_gite.php" method="post"class="form-group">
    <fieldset <?php if(!isset($_SESSION['auth'])) : ?>
        disabled>
         <div class="alert alert-secondary">Inscrivez vous ou connectez vous pour ajouter de nouveaux gîtes.</div>
    <?php endif ?>
    <label for="name">Nom du Gîte</label>
             <input type="text" name="nom">
             <label for="Localisation">Localisation du gîte</label>
             <input type="text"name="localisation">
             <label for="note">Note/5</label>
             <input type="number" name="note" min="0" max="5" value="0">
             <button type="submit" name="save" class="btn btn-primary">Enregistrez vos données</button>

    </fieldset>
            
         </form>
         