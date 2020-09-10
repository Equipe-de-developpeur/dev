<?php include 'header_hebergement.php';

include 'functions_gite.php'; 
log_only();
?>
<div class="artcicle article_1 container">
<?php
if(!empty($_POST)){
    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
        $_SESSION['flash']['danger'] = 'Vos mots de passe ne sont pas valides';
        header('Location:account_gite.php');
    }else{
        $user_id = $_SESSION['auth']['id'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        require_once 'config_bdd_gite.php';
        $req = $bdd->prepare("UPDATE users SET password = ? WHERE id= $user_id");
        $req->execute([$password]);
        $_SESSION['flash']['success'] = 'Vos mots de passe ont été modifiés';
        header('Location:account_gite.php');
    }
}else{
    $_SESSION['flash']['danger'] = 'Vos mots de passe ne sont pas valides';
}
?>
</div>
