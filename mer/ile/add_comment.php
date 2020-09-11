<?php
session_start();
//add_comment.php

include "connectPDO.php"; 
include "function.php";
$error = '';
$comment_name = $_SESSION['utilisateur_pseudo'];
$comment_content = '';



if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = htmlspecialchars($_POST["comment_content"]);
}

if($error == '')
{
 
 $ile=str_replace(' ','_',$_SESSION['ile']);
 
 if($ile=="Île_d'Or")
	{
		$ile="Île_d_Or";
	}
	if($ile=="Deux_Frères_(rocher)")
	{
		$ile="Deux_Frères_rocher";
	}
 
 
$sql = "
 INSERT INTO WD_commentaire_".$ile." (parent_comment_id, comment, comment_nom_membre) VALUES (:parent_comment_id, :comment, :comment_nom_membre)"; 

 $vars[':parent_comment_id']=$_POST["comment_id"];
 $vars[':comment']=$comment_content;
 $vars[':comment_nom_membre']=$comment_name;
 if($statement=query($sql,$vars))
 {
	$sql="SELECT utilisateur_nb_comm FROM WD_utilisateur WHERE utilisateur_id=:utilisateur_id";
	$vars2[':utilisateur_id']=$_SESSION['utilisateur_id'];
	$exe=query($sql,$vars2);
	$resultat=fetch_object($exe);
	$nb_comm=$resultat->utilisateur_nb_comm;
	$nb_comm++;
	$sql="UPDATE WD_utilisateur SET utilisateur_nb_comm=:utilisateur_nb_comm WHERE utilisateur_id=:utilisateur_id";
	$vars2[':utilisateur_nb_comm']=$nb_comm;
	$exe=query($sql,$vars2);
 $error = '<label class="text-success">Comment Added</label>';
 }
 else
 {
	 $error = '<label class="text-success">ERROR</label>';
 }
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>