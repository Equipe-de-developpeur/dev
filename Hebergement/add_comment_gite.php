<?php include 'config_bdd_gite.php'; ?>


<?php 


    if($_POST && !empty($_POST['new_comment'])){
        $req = $bdd->prepare("INSERT INTO comments SET comments = ?, id_gite = ?, id_user = ?,date_comment = NOW()");
    if($req->execute([$_POST['new_comment'], $_POST['id_gite'], $_POST['id_user']])){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        
    }else{

    }
    }

?>



<div class="article article_1 container">
    <h2>Commentaires</h2>
<hr class="comment_separator">
<form action="add_comment_gite.php"method="post"class="form-group">

<input type="text"class='form-control'placeholder="Ajouter un commentaire"name="new_comment">
<?php if(isset($_SESSION['auth'])): ?>
<input type="hidden"name="id_user"value = <?php echo $id_user ?>>
<?php endif ?>
<input type="hidden"name="id_gite"value = <?php echo $id_gite ?>>
<button class="btn btn-primary">Envoyer</button>
</form>

</div>
