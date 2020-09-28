<?php 
/* include "config_bdd.php";
include "connexion_traitement.php";

$pseudp = $_POST['pseudo'] ;
$pass = $_POST['pass'] ;


$pseudo = $_POST['pseudo'];


//Suppression des variables de session et de la session//
$_SESSION = array();
session_destroy();

//Suppression des cookies de connexion automatique//
setcookie('pseudo', '');
setcookie('pass', '');

$_SESSION = array();
session_destroy();

setcookie('pseudo','');
setcookie('pass','');


echo 'À bientôt '.$pseudo.' ! ;)';
*/
session_start();

$redirection=$_SERVER['HTTP_REFERER'];
if($redirection=="index.php")
{
	$redirection="index.php";
}

session_destroy();
header("location:index.php");
?>
