<?php include 'header_hebergement.php';

include 'functions_gite.php'; 
log_only();


?>

<div class="article article_1 container">
    <h2>Bonjour <?= $_SESSION['auth']['username']; ?></h2>

    <p>Modifier motre mot de passe</p>
    <form action="change_password_gite.php"method='post'class="form-group">
    <input type="password"name="password"class="form-control"placeholder="Rentrez votre nouveau mot de passe">
    <input type="password"name="password_confirm"class="form-control"placeholder="Confirmez votre nouveau mot de passe">
    <button type="submit" class="btn btn-primary">Changer votre mot de passe</button>
    </form>

    <?php
    
    ?>
</div>



<?php include 'footer.php'; ?>