<?php 

    $user_id = $_GET['id'];
    $token = $_GET['token'];
    include 'config_bdd_gite.php';
    $req = $bdd->prepare('SELECT * FROM users WHERE id= ?');
    $req->execute([$user_id]);
    $user = $req->fetch();
    session_start();
    if($user && $user['confirmation_token'] == $token){
        
        // On enlève la clef token et on enregistre la date et l'heure de la confirmation
        $req = $bdd->prepare("UPDATE users SET confirmation_token= NULL, confirmed_at = NOW() WHERE id= ?")->execute([$user_id]);
        // On ouvre la session
        $_SESSION['auth'] = $user;
        header('Location:account_gite.php');
        $_SESSION['flash']['success'] = 'Votre compte a été validé avec succès';
    }else{
        $_SESSION['flash']['danger'] = 'Ce token n\'est plus valide';
        header('Location:login_gite.php');
    }
?> 