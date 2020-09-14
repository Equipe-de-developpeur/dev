<?php
include 'header_hebergement.php';
include 'config_bdd_gite.php';
// Récupération des données du formulaire
$nom = $_POST['nom'];
$localisation = $_POST['localisation'];


// verification de la reception des données
/*
echo $nom;
echo $localisation;
echo $note;
*/

// Procedure d'enregistrement des données du formulaire dans la bdd
$req = $bdd->prepare("INSERT INTO gites (nom, localisation) VALUES (:nom, :localisation)");

if ($req->execute(array(
    'nom' => $nom,
    'localisation' => $localisation,
))) {
?>

    <article class="article article_1 article_insert container">
        <h2>Validation des données</h2>
        <p>
            <strong>Nom du gîte :</strong> <?php echo $nom ?><br>
            <strong>Localisation :</strong> <?php echo $localisation ?><br>
        <a href="gite.php"><button class="btn btn-success article_btn ">Retournez à la liste des tableaux</button></a>
    </article>



<?php




} else {
    echo 'Problème d\'enregistrement';

    // prise en charge des messages d'erreurs
    print_r($req->errorInfo());
}

?>