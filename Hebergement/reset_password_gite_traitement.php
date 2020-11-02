
<?php 
include 'config_bdd_gite.php';
$user_id = $_POST['id'];
$reset_token = $_POST['reset_token'];

$req = $bdd->prepare("SELECT * FROM users WHERE id= $user_id");
$req->execute([$user_id]);
$user = $req->fetch();
if($reset_token == $user['reset_token']){
    if($_POST && ($_POST['password'])){
        if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
            $_SESSION['flash']['danger'] = 'Votre nouveau mot de passe n\'est pas valide ou vos mots de passes ne sont pas similaires.';
            header('Location:reset_password_gite.php'); 
        }else{
           
            $req = $bdd->prepare("UPDATE users SET password = ?, reset_token = NULL WHERE id = $user_id");
            $password= password_hash($_POST['password'], PASSWORD_BCRYPT);
            $req->execute([$password]);
            session_start();
            $_SESSION['flash']['success'] = 'Votre mot de passe a bien été modifié';
            $_SESSION['auth'] = $user;
            header('Location:account_gite.php');

        }
    }
}


    

?>
