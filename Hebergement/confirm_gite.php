<?php 

    $user_id = $_GET['id'];
    $token = $_GET['token'];
    include 'config_bdd_gite.php';
    $req = $bdd->prepare('SELECT confirmation_token FROM users WHERE id= ?');
    $req->execute([$user_id]);
    $user = $req->fetch();

    if($user && $user['confirmation_token'] == $token){
        session_start();
        $req = $bdd->prepare("UPDATE users SET confirmation_token= NULL, confirmed_at = NOW() WHERE id= ?")->execute([$user_id]);

        $_SESSION['auth'] = $user;
        header('Location:account_gite.php');
    }else{
        die('pas ok');
    }
?> 