<?php
include 'config_bdd_gite.php';
// Si les champs post, username et password sont remplis : 
if (!empty($_POST) && !empty($_POST['username'] && !empty($_POST['password']))) {
    // SELECTIONNE TOUTE LA TABLE USER LA OU LE CHAMP USERNAME CORRESPOND AU POST USERNAME OU EMAIL CORRESPOND AU POST EMAIL
    $req = $bdd->prepare("SELECT * FROM users WHERE (username = :username OR email = :username) AND confirmed_at IS NOT NULL");
    // Execute la requete : la valeur dans la table username est égale au POST username
    $req->execute(['username' => $_POST['username']]);
    // Stocke les valeurs de $req sous forme de tableau dans la variable $user
    $user = $req->fetch();
    // Si le password fourni coorespond au hachage du mot de passe stocké
    if (password_verify($_POST['password'], $user['password'])) {
        // Active la session
        $_SESSION['auth'] = $user;
        $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté';
        // Redirige vers account_gite.php
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        // Fin de la requête
        exit();
        // Sinon renvoie un message d'erreur
    } else {
        $_SESSION['flash']['danger'] = 'Votre identifiant ou votre mot de passe est incorrect';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
?>





<div class="little_login_gite">
    <form action="login_gite.php" method="post" class='form-group login-form '>
        <div class="input">
            <input type="text" name="username" class="form-control" placeholder="Pseudo ou email">
            <div class="password">
                <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                <a href="password_forget_gite.php">(Mot de passe oublié ?)</a>
            </div>
        </div>





        <button class="btn btn-primary">Se connecter</button>
    </form>
</div>

</div>