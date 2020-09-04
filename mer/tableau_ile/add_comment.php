<?php
session_start();
//add_comment.php

include "connectPDO.php"; 
include "function.php";
$error = '';
$comment_name = '';
$comment_content = '';

if(empty($_POST["comment_name"]))
{
 $error .= '<p class="text-danger">Name is required</p>';
}
else
{
 $comment_name = $_POST["comment_name"];
}

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
 
$sql = "
 INSERT INTO commentaire_".str_replace(' ','_',$_SESSION['ile'])." (parent_comment_id, comment, comment_nom_membre) VALUES (:parent_comment_id, :comment, :comment_nom_membre)"; 

 $vars[':parent_comment_id']=$_POST["comment_id"];
 $vars[':comment']=$comment_content;
 $vars[':comment_nom_membre']=$comment_name;
 if($statement=query($sql,$vars))
 {

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