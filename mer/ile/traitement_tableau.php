<?php
include "meteo.php";
include "calcul_distance.php";
if(isset($_REQUEST['ile']) AND !empty($_REQUEST['ile']))
{
	
	$_SESSION['ile']=$_REQUEST['ile'];
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
}


if(isset($_SESSION['ville']) AND ($_SESSION['ville']!="1") )
{
	// Recuperation latitude longitude de la ville selectionnée
	$sql_distance="SELECT ville_proxi_lat, ville_proxi_long FROM WD_ville_proxi WHERE ville_proxi_nom=:ville_proxi_nom";
	$vars_distance[':ville_proxi_nom']=$_SESSION['ville'];
	$exe_distance=query($sql_distance,$vars_distance);
	$resultat_distance=fetch_object($exe_distance);
	$latitude_ville=$resultat_distance->ville_proxi_lat;
	$longitude_ville=$resultat_distance->ville_proxi_long;
	
	// Calcul des distances avec chaque ile
	
	$sql_ile="SELECT liste_ile_id, liste_ile_latitude, liste_ile_longitude FROM WD_liste_ile WHERE 1";
	$exe_ile=query($sql_ile);
	while($resultat_ile=fetch_object($exe_ile))
	{
		$latitude_ile=$resultat_ile->liste_ile_latitude;
		$longitude_ile=$resultat_ile->liste_ile_longitude;
		$distance_ile_ville=(round(get_distance_m($latitude_ville, $longitude_ville, $latitude_ile, $longitude_ile) / 1000,2));
		$sql_update_distance="UPDATE `WD_liste_ile` SET `liste_ile_distance` =:liste_ile_distance WHERE `WD_liste_ile`.`liste_ile_id` =:liste_ile_id";
		$vars_update[':liste_ile_distance']=$distance_ile_ville;
		$vars_update[':liste_ile_id']=$resultat_ile->liste_ile_id;
		$exe_update=query($sql_update_distance, $vars_update);
	}
	
	
	
	$sql="SELECT * FROM WD_liste_ile WHERE 1 ORDER BY liste_ile_distance ASC";
	
}
if(isset($_SESSION['tri']) AND ($_SESSION['tri']!="1"))
{
	$sql="SELECT * FROM WD_liste_ile WHERE 1 ".$_SESSION['tri'];
}
else if (((isset($_SESSION['tri']) AND isset($_SESSION['ville']) AND $_SESSION['ville']=="1") AND ($_SESSION['tri']=="1")) || (!isset($_SESSION['tri']) AND !isset($_SESSION['ville'])))
{
	$sql="SELECT * FROM WD_liste_ile WHERE 1 ORDER BY liste_ile_nom ASC";
}
$exe=query($sql);
$sql2="SELECT DISTINCT ville_proxi_nom FROM WD_ville_proxi WHERE 1 ORDER BY ville_proxi_nom ASC ";
$exe2=query($sql2);

?>



