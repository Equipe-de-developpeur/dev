<?php include 'header_hebergement.php';
    include 'functions_gite.php';
    include 'config_bdd_gite.php';

?>

<?php  if(isset($_GET['id']) && isset($_GET['token'])){

} else{
    $_SESSION['flash']['danger'] = 'Ce contenu n\'est plus disponible.';
    header('Location:login_gite.php');
    exit();

}

 

   
    
?>






<div class="container article article_1">
<h2>Modification de votre mot de passe</h2>
<form action="reset_password_gite_traitement.php"method="post"class="form-group">
<label for="">Veuillez rentrer votre nouveau mot de passe</label>
<input type="password"class="form-control"placeholder="Nouveau mot de passe"name="password">
<label for="">Confirmez votre nouveau mot de passe</label>
<input type="password"class="form-control"placeholder="Confirmation nouveau mot de passe"name="password_confirm">
<input type="hidden"name="id"value="<?= $_GET['id']; ?>">
<input type="hidden"name="reset_token"value="<?= $_GET['token']; ?>">
<button class="btn btn-primary">Envoyer votre nouveau mot de passe</button>
    
</form>
</div>
    

   
    