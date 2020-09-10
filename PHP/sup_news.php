<?php 
include "connexion_bdd.php";

$id_supp = $_GET['id'];

/*
echo $id_supp;
exit();
*/

$req = $connexion->query("DELETE FROM nature WHERE id='$id_supp'");

header("location:index.php");

?>