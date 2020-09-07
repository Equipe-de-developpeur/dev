<?php
include 'header_hebergement.php';
?>

<?php 
// Si $_POST n'est pas vide :
if(!empty($_POST)){
    $errors = array();
// Si $_POST est vide ou n'est pas compris dans les critères [a-zA-Z0-9_]
    if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username']) ){
        // Ajouter une erreur dans la variable $errors['username]
        $errors['username'] = 'Votre pseudo n\'est pas valide';
    }

    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Votre e-mail n\'est pas valide';
    }
    if(empty($_POST['password'])){
        $errors['password'] = 'Votre mot de passe n\'est pas valide';
    }
    if(empty($_POST['password']) != empty($_POST['password_confirm'])){
        $errors['password_confirm'] = 'Vos mots de passe doivent être identiques';
    }
    debug($errors);
}


?>












<div class="article article_1 container">
    <h2>Inscription </h2>
    <p>Inscrivez vous pour laisser votre avis, des commentaires ou encore pour donner une note à vos gîtes préférés !</p>


    <form action="register_gite.php" method="post" class="form-group">

        <div class="form-group">
            <label for="Pseudo">Veuillez entrer un pseudo</label>
            <input type="text" name="username"class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Veuillez entrer votre adresse mail</label>
            <input type="email" name="email"class="form-control">
        </div>
        <div class="form-group">
            <label for="Password">Veuillez entrer un mot de passe</label>
            <input type="password" name="password"class="form-control">
        </div>
        <div class="form-group">
            <label for="Password_confirm">Veuillez confirmer votre mot de passe</label>
            <input type="password" name="password_confirm"class="form-control">
        </div>
<button type="submit" class="btn btn-primary">M'inscrire</button>


    </form>
</div>