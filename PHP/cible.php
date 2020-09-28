<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="entry.css">
</head>
<body>
<h1 id="titreh1">Insertion de la plante dans la bdd</h1>
<?php
include "connexion_bdd.php";

$nom_espece = $_POST['nom_espece'];
$nom_latin = $_POST['nom_latin'];
$lieu = $_POST['lieu'];
$dat = $_POST['date'];
/*
echo $nom_espece;
echo $nom_latin;
echo $lieu;
echo $dat;
//exit();
*/


$req = $connexion->prepare("INSERT INTO nature (nom_espece,nom_latin,lieu,dat) VALUES(:nom_espece, :nom_latin, :lieu, :dat)");

if($req->execute(array(
    'nom_espece' => $nom_espece,
    'nom_latin' => $nom_latin,
    'lieu' => $lieu,
    'dat' => $dat,
))) {
    echo
    '<h2 id="titreh2">
        La plante à bien été enregistrée<br>
    </h2>
    <div class="resultat">
    <p style="text-align:center;font-weight:bold;">Voici un récapitulatif de votre news :</p> 
    <br> 
    <p>Nom de l\'espèce: <b style="background-color:#f7f7f7"><br>' . $nom_espece . '</b></p> 
    <p>Nom latin de la plante: <b style="background-color:#f7f7f7"><br>' . $nom_latin . '</b></p>
    <p>Lieu de la plante: <b style="background-color:#f7f7f7"><br>' . $lieu . '</b></p>
    <p>Date de la plante: <b style="background-color:#f7f7f7"><br>' . $dat . '</b></p>
    </div>';

    echo '
        <p class="newlink">
        <a href="form.php">Retour au formulaire</a>
        </p>';
}   else {
    echo '
    <div class="alert alert-danger" role="alert">
    Problème d\'enregistrement : <br/>
    </div>
    ';

    print_r($req->errorInfo());
}
?>
</body>
</html>
