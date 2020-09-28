<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nature</title>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="entry.css">
</head>
<body>
<ul class="menu">
<li><a href="connexion.php" class="bouton">Connexion</a></li>
<li><a href="inscription.php" class="bouton">S'inscrire</a></li>
</ul>
<br>
<h1 id="titreh1">Recensement des espèces végétales protégées</h2>
<h2 id="titreh2">Veuillez vous connecter pour mettre à jour et supprimer</h3>
<?php 
include "connexion_bdd.php";


$req = $connexion->query('SELECT * FROM nature');


/*echo '<div class="resultat">';*/
$donnees = $req->fetchAll();

foreach($donnees as $row)
{
    echo ('
    <div class="resultat">
    <strong><p>Numéro de la plante : ' . $row['id'] . '<strong></p>
    <strong><p>Nom de la plante : ' . $row['nom_espece'] . '<strong></p>
    <strong><p>Nom latin de la plante : ' . $row['nom_latin'] . '<strong></p>
    <strong><p>Lieu de la plante : ' . $row['lieu'] . '<strong></p>
    <strong><p>Date de la plante : ' . $row['dat'] . '<strong></p>
    </div>');
    
}
    /*
    <a href=maj_news.php?id=' . $row['id'] . '>Veuillez vous connecter pour mettre à jour</a><br>
    <a href=sup_news.php?id=' . $row['id'] . '>Veuillez vous connecter pour supprimer</a><br>
    */

echo '</div>';

/*
while ($donnees = $req->fetch()){
    $numero = $donnees['id'];
    $nom_espece = $donnees['nom_espece'];
    $nom_latin = $donnees['nom_latin'];
    $lieu = $donnees['lieu'];
    $date = $donnees['dat'];

    echo ('
    <strong>' . $numero . '<strong><br>
    <strong>' . $nom_espece . '<strong><br> 
    <strong>' . $nom_latin . '<strong><br>
    <strong>' . $lieu . '<strong><br>
    <strong>' . $date . '<strong><br>
    <a href=maj_news.php?id' . $numero . '>Mettre à jour</a><br>
    <a href=sup_news.php?id' . $numero . '>Supprimer</a>');

    $req = null;

}

*/
?>    
</body>
</html>
