<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <title>Nature</title>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@900&display=swap" rel="stylesheet"> 
</head>
<body>
<h2 id="titre">Recensement des espèces végétales protégées</h2>
<form action="cible.php" method="post" id="formulaire" name="formulaire">
<label for="nom_espece">Nom de l'espèce: </label> <br>
<input type="text" name="nom_espece" id="nom_espece"><br>
<label for="nom_latin">Nom latin: </label> <br>
<input type="text" name="nom_latin" id="nom_latin"><br>
<label for="lieu"></label>Lieu du recensement: <br> 
<input type="text" name="lieu" id="lieu"><br>
<label for="date"></label>Date du recensement: <br> 
<input type="date" name="date" id="date"><br><br>
<input type="submit" value="Envoyer"><br>
</form>
<?php 
include "connexion_bdd.php";


$req = $connexion->query('SELECT * FROM nature');


echo '<div class="resultat">';
$donnees = $req->fetchAll();

foreach($donnees as $row)
{
    echo ('
    <br><strong>' . $row['id'] . '<strong><br>
    <strong>' . $row['nom_espece'] . '<strong><br> 
    <strong>' . $row['nom_latin'] . '<strong><br>
    <strong>' . $row['lieu'] . '<strong><br>
    <strong>' . $row['dat'] . '<strong><br>
    <a href=maj_news.php?id=' . $row['id'] . '>Mettre à jour</a><br>
    <a href=sup_news.php?id=' . $row['id'] . '>Supprimer</a><br>');
    
}

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
