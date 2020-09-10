<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h2>Insertion de la plante dans la bdd</h2>
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
    '<div class="alert alert-success" role="alert">
        La plante à bien été enregistrée<br>
    </div>
    Voici un récapitulatif de votre news : <br> Nom de la plante : <strong>' . $nom_espece . '<strong><br> Description : <strong><br>' . $nom_latin . 
    '<strong><br>' . $lieu . '<strong><br>' . $dat . '<strong><br>';

    echo '<a href="index.php" class="btn btn-primary" role="button">Retour au formulaire</a>';
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
