<?php
include 'header_hebergement.php';
include 'config_bdd_gite.php';
include 'functions_gite.php';
?>

<?php 
// Si $_POST n'est pas vide :
if(!empty($_POST)){
    $errors = array();
// Si $_POST est vide ou n'est pas compris dans les critères [a-zA-Z0-9_]
    if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username']) ){
        // Ajouter une erreur dans la variable $errors['username]
        $errors['username'] = 'Votre pseudo n\'est pas valide. Il ne peut contenir que des lettres majuscule, minuscule, et chiffres de 0 à 9 et des underscores (_)';
    }else{ 
        // SINON PREPARE UNE REQUETTE QUI SELECTIONNE TOUS LES ID DANS USERS OU USERNAME EST EGAL AU POST
        $req = $bdd->prepare("SELECT id FROM users WHERE username = ?");
        // EXECUTE LA REQUETTE
        $req->execute([$_POST['username']]);
        // SI IL TROUVE UN USERNAME STOCKE LE SOUS FORME DE TABLEAU DANS $user
        $user = $req->fetch();
        if($user){
            // Si il y a une donnée dans $user, envoie un message d'erreur
            $errors['username'] = 'Ce pseudo est deja utilisé sur un autre compte';
        }
        
    }

    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Votre e-mail n\'est pas valide';
    }else{
        $req = $bdd->prepare("SELECT id FROM users WHERE email = ?");
        $req->execute([$_POST['email']]);
        $user= $req->fetch();
        if($user){
            $errors['email'] = 'Cette adresse e-mail est déja utilisée sur un autre compte';
        }
        
    }
    if(empty($_POST['password'])){
        $errors['password'] = 'Votre mot de passe n\'est pas valide';
    }
    if(($_POST['password']) != ($_POST['password_confirm'])){
        $errors['password_confirm'] = 'Vos mots de passe doivent être identiques';
    }
   
if(empty($errors)){
    $req = $bdd->prepare("INSERT INTO users SET username = ?, email = ?, password = ?, confirmation_token = ?" );
    // Cryptage des passwords afin de renforcer la sécurité des utilisateurs. Utilisation de BCRYPT car il ne change pas en fonction des nouvelles versions de PHP.
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    
    $token = str_random(60);
    $req->execute([$_POST['username'], $_POST['email'], $password, $token]);
    $user_id= $bdd->lastInsertId();
    mail($_POST['email'], 'Confirmation de votre compte', "Veuillez cliquer sur ce lien pour confirmer votre compte\n\nhttp://localhost/developpementfilrouge/dev/hebergement/confirm_gite.php?id=$user_id&token=$token");
    $_SESSION['flash']['success'] = 'Un email de confirmation vous a été envoyé afin de valider votre compte';
    header('Location: login_gite.php');
    exit();

}
   
}


?>












<div class="article article_1 container">
    <h2>Inscription </h2>
    <!-- Si $errors est différent de vide -->
    <?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
        <p>Vous n'avez pas rempli le formulaire correctement</p>
        <ul>
            <!-- Pour chaque valeurs dans le tableau de $errors, transforme les valeurs du tableau en variable $error -->
            <?php foreach($errors as $error):?>
                <!-- Affiche le contenu de la variable $error -->
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
                <!-- Fin du if à PRECISER SINON ERREUR, il sert d'accolade de fermeture car le if est ouvert avec :.  -->
            <?php endif; ?>
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