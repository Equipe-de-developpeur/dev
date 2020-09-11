<?php
session_start();

$redirection=basename($_SERVER['HTTP_REFERER']);
if($redirection=="description.php")
{
	$redirection="ile.php";
}
session_destroy();
header("location: ".$redirection);

?>