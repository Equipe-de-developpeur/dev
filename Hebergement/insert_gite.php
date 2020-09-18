<form action="insert_traitement_gite.php" method="post" enctype= "multipart/form-data"class="form-group">
    <fieldset <?php if (!isset($_SESSION['auth'])) : ?> disabled>
        <div class="alert alert-secondary">Inscrivez vous ou connectez vous pour ajouter de nouveaux gîtes.</div>
    <?php endif ?>

    <label for="name">Nom du Gîte</label>
    <input type="text" name="nom" class="form-control">
    <label for="Localisation">Localisation du gîte</label>
    <input type="text" name="localisation" class="form-control">
    <label for="description" style="display: block; margin-top : 2vw;">Faites une petite description de votre gite ! </label>
    <textarea name="description" class="form-control" id="" cols="30" rows="5"></textarea>
    <label for="pic">Ajoutez une photo de votre gite : </label>
    <input type="file" name="picture" class="form-control">
    <button type="submit" name="save" class="btn btn-primary">Enregistrez vos données</button>









    </fieldset>

</form>