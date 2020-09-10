
<?php include 'header_hebergement.php';
        include 'functions_gite.php'; 
        include 'config_bdd_gite.php';?>

<?php 

    // Si les champs post, username et password sont remplis : 
    if(!empty($_POST) && !empty($_POST['email'] )){
        // SELECTIONNE TOUTE LA TABLE USER LA OU LE CHAMP USERNAME CORRESPOND AU POST USERNAME OU EMAIL CORRESPOND AU POST EMAIL
        $req = $bdd->prepare("SELECT * FROM users WHERE email = ? AND confirmed_at IS NOT NULL");
        // Execute la requete : la valeur dans la table username est égale au POST username
        $req->execute([$_POST['email']]);
        // Stocke les valeurs de $req sous forme de tableau dans la variable $user
        $user = $req->fetch();
        // Si le password fourni coorespond au hachage du mot de passe stocké
       if($user){
           $reset_token = str_random(60);
           $req = $bdd->prepare("UPDATE users SET reset_token= ?, reset_at = NOW() WHERE id = ?");
           $req->execute([$reset_token, $user['id']] );
           $user_id = $user['id'];
   

            $_SESSION['flash']['success'] = 'Un email pour modifier votre mot de passe vous a été envoyé';
            // Redirige vers account_gite.php
            header('Location:login_gite.php');
            mail($_POST['email'], 'Reinitialisation de votre mot de passe', "Veuillez cliquer sur ce lien pour reinitialiser votre mot de passe\n\nhttp://localhost/developpementfilrouge/dev/hebergement/reset_password_gite.php?id=$user_id&token=$reset_token");

            // Fin de la requête
            exit();
            // Sinon renvoie un message d'erreur
        }else{
            $_SESSION['flash']['danger'] = 'Aucun compte ne correspond à cet email';
            header('Location:login_gite.php');
        }
    }
?>


<div class="article article_1 container">
    <h2>Reinitialiser votre mot de passe</h2>



    <form action="" method="post" class='form-group'>

        
        <input type="email" name="email" class="form-control" placeholder="Entrez l'email de votre compte">


        <button class="btn btn-primary">Reinitialiser votre mot de passe</button>
    </form>
</div>