
<?php
include 'header_hebergement.php';
include 'config_bdd_insolite.php'; 

$nom = $_POST['nom'];
$localisation = $_POST['localisation'];
$notation = $_POST['notation'];
$id = $_POST['id_hebergement'];

$req = $bdd->exec("INSERT INTO hebergement (nom, localisation, notation) values ( '$nom', '$localisation', '$notation');");

?>


<article class="article article_1 container" style="color:#ea5a00;text-align:center;font-weight:bold;padding-top:20px;">

<p>Votre enregistrement à été effectué avec succès !</p>
<a style="color:#ea5a00;" href="insolite.php">Revenir à la page précédente</a>




