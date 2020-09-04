<!DOCTYPE html>
<html lang="en">
<head>
  <title>Liste Ile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

<?php


include "connectPDO.php";
include "function.php";

//Structure de la table
$sql="SELECT liste_ile_nom FROM liste_ile WHERE 1";
$exe=query($sql);

while($resultat=fetch_object($exe))
{
	
	$ile=str_replace(' ','_',$resultat->liste_ile_nom);
	$sql_install="CREATE TABLE IF NOT EXISTS `commentaire_".$ile."` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`comment_id`)
	)";
	$exe_install=query($sql_install);
	echo "table ".$ile." bien installée";
	?>
	<br>
	<?php
	$sql_alter="ALTER TABLE `commentaire_".$ile."` CHANGE `date` `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP"; 
	$exe_alter=query($sql_alter);
}




?>
</body>
</html>