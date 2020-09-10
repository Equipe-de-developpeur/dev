<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <H2>Inscription</H2>
    <?php 
    include "connexion_bdd.php";

    $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $id = $_POST['id'];
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $dat_de_naissance = $_POST['dat_de_naissance'];


    $req = $connexion->prepare("INSERT INTO membre (pseudo, pass_hache, email, dat_de_naissance) VALUES(:pseudo,:pass_hache,:email,:dat_de_naissance)");

   if($req->execute(array(
        'pseudo' = $pseudo,
        'pass' = $pass_hache,
        'email' = $email,
        'date_de_naissance' = $dat_de_naissance)));
    {
        echo '<div class="alert alert-success" role="alert">
        La plante à bien été enregistrée<br>
    </div>
    }
    
    
    
    
    ?>
</body>
</html>