<?php include 'config_bdd_camping.php';

$id_supp=$_POST['id_camping'];

$req=$connexion->query("DELETE FROM hebergement WHERE id_camping='$id_supp'");

header("location:camping.php");

?>
