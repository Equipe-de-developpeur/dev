<?php
session_start();
if(isset($_REQUEST['ile']) AND !empty($_REQUEST['ile']))
{
	if(isset($_REQUEST['ile_id']) AND !empty($_REQUEST['ile_id']))
	{
		$_SESSION['ile_id']=$_REQUEST['ile_id'];
	}
	$_SESSION['ile']=$_REQUEST['ile'];
	header('Location: description.php');
	exit;
}
else
{
	if(isset($_REQUEST['id']) AND !empty($_REQUEST['id']))
	{
		$_SESSION['ville']=$_REQUEST['id'];
		$_SESSION['tri']="1";
	}
	if(isset($_REQUEST['tri']) AND !empty($_REQUEST['tri']))
	{
		$_SESSION['tri']=$_REQUEST['tri'];
	}
	header('Location: ile.php');
	exit;
}
?>