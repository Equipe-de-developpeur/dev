<?php
include 'header_hebergement.php';
include 'config_bdd_insolite.php'; 

$id = $_POST['id_hebergement'];
$nom = $_POST['nom'];
$localisation = $_POST['localisation'];
$notation = $_POST['notation'];

$req = $bdd->exec("UPDATE hebergement SET nom='$nom', localisation='$localisation', notation='$notation' WHERE id_hebergement='$id';");

?>


<article class="article article_1 container" style="color:#ea5a00;text-align:center;font-weight:bold;padding-top:20px;">

<p>Votre modification à été effectué avec succès !</p>
<a style="color:#ea5a00;" href="insolite.php">Revenir à la page précédente</a>