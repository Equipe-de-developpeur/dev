<?php
include("config_bdd.php");

// récupération des données du formulaire
$id_supp = $_GET['id'];

// vérification de la bonne réception des champs
// echo $id_supp;
// exit();

// procédure de suppression de l'enregistrement

$req = $connexion->query("DELETE FROM notation_ville where id_notation='$id_supp'");

//apres la suppression retour automatique  à la liste des news
header("location: index.php");

?>