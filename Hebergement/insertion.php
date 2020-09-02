<?php

include 'config_bdd_insolite.php'; 

$nom = $_POST['nom'];
$localisation = $_POST['localisation'];
$notation = $_POST['notation'];

$req = $bdd->exec("INSERT INTO hebergement (nom, localisation, notation) values ( '$nom', '$localisation', '$notation');");

echo "<p>Votre enregistrement à été effectué avec succès !</p>";
echo "<a href='hebergement_insolite.php'>Revenir à la page précédente</a>";

?>

