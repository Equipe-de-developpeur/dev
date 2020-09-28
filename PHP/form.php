<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" type="text/css" href="entry.css">
    <meta charset="UTF-8">
    <title>Nature</title>
</head>

<body>
    <ul class="menu">
        <li><a href="deconnexion.php" class="bouton">Se déconnecter</a></li>
        <!--<li><a href="maj_info.php" class="bouton">Modifier mon profil</a></li>-->
    </ul>
    <br>
    <h1 id="titreh1">Recensement des espèces végétales protégées</h1>
    <div class="formal">
        <form action="cible.php" method="post" class="formulaire" name="formulaire">
            <label for="nom_espece">Nom de l'espèce: </label> <br>
            <input type="text" name="nom_espece" id="nom_espece" required pattern="^[A-Za-z '-]+$" maxlength="20"><br>
            <label for="nom_latin">Nom latin: </label> <br>
            <input type="text" name="nom_latin" id="nom_latin"><br>
            <label for="lieu"></label>Lieu du recensement: <br>
            <input type="text" name="lieu" id="lieu"><br>
            <label for="date"></label>Date du recensement: <br>
            <input type="date" name="date" id="date"><br><br>
            <input type="submit" value="Envoyer" class="bouton"><br>
    </div>
    </form><br>

    <!--<br><br><br><br><br><br><br><br>
<a href="inscription.php" class="bouton">S'inscrire</a><br><br>
<a href="connexion.php" class="bouton">Connexion</a><br><br>
    -->

    <?php
    include "connexion_bdd.php";


    $req = $connexion->query('SELECT * FROM nature');


    $donnees = $req->fetchAll();

    foreach ($donnees as $row) {
        echo ('
    <div class="resultat">
    <strong><p>Numéro de la plante :<br> ' . $row['id'] . '<strong></p>
    <strong><p>Nom de la plante :<br> ' . $row['nom_espece'] . '<strong></p>
    <strong><p>Nom latin de la plante :<br> ' . $row['nom_latin'] . '<strong></p>
    <strong><p>Lieu de la plante :<br> ' . $row['lieu'] . '<strong></p>
    <strong><p>Date de la plante :<br> ' . $row['dat'] . '<strong></p>
    <ul class="menuinfo">
    <li><a href=maj_news.php?id=' . $row['id'] . ' class="lien">Mettre à jour</a></li>
    <li><a href=sup_news.php?id=' . $row['id'] . ' class="lien">Supprimer</a></li>
    </ul>
    </div>');
    }

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