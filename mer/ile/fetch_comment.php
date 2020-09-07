<?php
session_start();
//fetch_comment.php

include "connectPDO.php"; 
include "function.php";
if(isset($_SESSION['ile']) AND !empty($_SESSION['ile']))
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
if($ile=="Île_de_Port-Cros")
	{
		$ile="Île_de_Port_Cros";
	}
	
$sql = "
SELECT * FROM commentaire_".$ile." WHERE parent_comment_id = '0' 
ORDER BY comment_id DESC
";
}
$statement =query($sql);


$output = '';
while($resultat =fetch_object($statement))
{
	$resultat->date=date("d-m-Y H:i:s",strtotime($resultat->date));
 $output .= '
 <div class="panel panel-default">
  <div class="panel-heading">De <b>'.$resultat->comment_nom_membre.'</b> : <i>'.$resultat->date.'</i></div>
  <div class="panel-body">'.$resultat->comment.'</div>
  <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$resultat->comment_id.'">Reply</button></div>
 </div>
 ';
 $output .= get_reply_comment($GLOBALS['conn'], $resultat->comment_id);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
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
 $query = "
 SELECT * FROM commentaire_".$ile." WHERE parent_comment_id = '".$parent_id."'
 ";
 $output = '';
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 3;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
	  $row["date"]=date("d-m-Y H:i:s",strtotime($row["date"]));
   $output .= '
   <div class="panel panel-default" style="margin-left:'.$marginleft.'vw">
    <div class="panel-heading">De <b>'.$row["comment_nom_membre"].'</b> : <i>'.$row["date"].'</i></div>
    <div class="panel-body">'.$row["comment"].'</div>
    <div class="panel-footer" align="right"></div>
   </div>
   ';
   $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
  }
 }
 return $output;
}

?>