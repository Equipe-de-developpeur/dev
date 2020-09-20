<?php
session_start();

$redirection=$_SERVER['HTTP_REFERER'];
if($redirection=="description.php")
{
	$redirection="../ile/ile.php";
}
session_destroy();
header("location: ".$redirection);

?>