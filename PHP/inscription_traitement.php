<style>
<?php 
include "entry.css"; 
?>
</style>

<?php 
    include "connexion_bdd.php";

    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $dat_de_naissance = $_POST['dat_de_naissance'];


    $req = $connexion->prepare("INSERT INTO membre (pseudo, pass, email, dat_de_naissance)
     VALUES(:pseudo,:pass,:email,:dat_de_naissance)");
   if($req->execute(array(
        'pseudo' => $pseudo,
        'pass' => $pass,
        'email' => $email,
        'dat_de_naissance' => $dat_de_naissance
        )))
    {
        echo '<ul class="menu">
                <li><a href="connexion.php" class="bouton" role="button">Se connecter</a></li>
                <li><a href="index.php" class="bouton" role="button">Retour</a></li>
                </ul>
                <br>';
                echo '<br><br><br>';

        echo '<div class="alert alert-success" role="alert">
                <h2 class="titre2">Bienvenue ' . $pseudo . ',</h2><br>
                <h2 class="titre2">Votre adresse email est ' . $email . '</h2></div>';
        
        
    }
    else {
        echo '<div class="alert alert-danger" role="alert">
                Problème d\'enregistrement : <br/>
            </div>
        ';
    
        print_r($req->errorInfo());
    }
    
    ?>