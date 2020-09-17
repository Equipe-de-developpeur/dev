<?php
include "connect_pdo.php";
if(isset($_REQUEST['role']) AND !empty($_REQUEST['role']))
{
	$role=explode('_',$_REQUEST['role']);
	$sql="UPDATE `WD_utilisateur` SET `utilisateur_role` =:utilisateur_role WHERE `utilisateur_id` =:utilisateur_id";
	$vars[':utilisateur_role']=$role[0];
	$vars[':utilisateur_id']=$role[1];
	$exe=query($sql,$vars);
	if($vars[':utilisateur_id']==$_SESSION['utilisateur_id'])
	{
		$_SESSION['utilisateur_role']=$vars[':utilisateur_role'];
	}
	header('Location:liste_membres.php');
}