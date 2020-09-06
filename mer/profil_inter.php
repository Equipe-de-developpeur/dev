<?php
session_start();

$_SESSION['retour_profil']=$_SERVER['HTTP_REFERER'];
header('Location: profil.php');

?>