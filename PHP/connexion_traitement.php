<style>
<?php 
include "entry.css"; 
?>
</style>


<?php 
include "connexion_bdd.php";
session_start();
$pseudo = $_POST['pseudo'];
$req = $connexion->prepare('SELECT id, pass FROM membre WHERE pseudo = :pseudo');

$req->execute(array(
    'pseudo' => $pseudo,));
$resultat = $req->fetch();

$isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);
$id_session = session_id();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}

else
{
    if ($isPasswordCorrect) {
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;
        echo "<h1 class='titre1'>Vous êtes connecté !</h1><br>";
        echo "<h2 class='titre2'><a href='form.php' class='link'>
        Accéder au formulaire de plantes protégées</a></h2>";
        echo 'ID de session (récupéré via session_id()) : <br>'
        .$id_session. '<br>';;
    }

    else {
        echo '<h1 class="titre1">Mauvais identifiant ou mot de passe !</h1><br>';
        echo "<h2 class='titre2'><a href='connexion.php' class='link'>Retourner au formulaire de connexion</a></h2>";
    }
}

?>