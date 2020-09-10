<?php include 'header_hebergement.php';
        include 'functions_gite.php'; 
        include 'config_bdd_gite.php';?>

<?php 
    // Si les champs post, username et password sont remplis : 
    if(!empty($_POST) && !empty($_POST['username'] && !empty($_POST['password']))){
        // SELECTIONNE TOUTE LA TABLE USER LA OU LE CHAMP USERNAME CORRESPOND AU POST USERNAME OU EMAIL CORRESPOND AU POST EMAIL
        $req = $bdd->prepare("SELECT * FROM users WHERE (username = :username OR email = :username) AND confirmed_at IS NOT NULL");
        // Execute la requete : la valeur dans la table username est égale au POST username
        $req->execute(['username' => $_POST['username']]);
        // Stocke les valeurs de $req sous forme de tableau dans la variable $user
        $user = $req->fetch();
        // Si le password fourni coorespond au hachage du mot de passe stocké
        if(password_verify($_POST['password'], $user['password'])){
            // Active la session
            $_SESSION['auth'] = $user; 
            $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté';
            // Redirige vers account_gite.php
            header('Location:account_gite.php');
            // Fin de la requête
            exit();
            // Sinon renvoie un message d'erreur
        }else{
            $_SESSION['flash']['danger'] = 'Votre identifiant ou votre mot de passe est incorrect';
            header('Location:login_gite.php');
        }
    }
?>

        <div class="article article_1 container">
            <h2>Se connecter</h2>
            


        <form action="login_gite.php"method="post"class='form-group'>
        <div class="form-group">
            <label for="Pseudo">Pseudo ou email</label>
            <input type="text" name="username"class="form-control">
        </div>
        
        <div class="form-group">
            <label for="Password">Veuillez entrer votre mot de passe</label>
            <input type="password" name="password"class="form-control">
            <a href="password_forget_gite.php">(Mot de passe oublié ?)</a>
        </div>
        <button class="btn btn-primary">Se connecter</button>
        </form>
        </div>