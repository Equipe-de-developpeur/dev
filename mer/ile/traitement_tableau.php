<?php
include "../connect_pdo.php";
include "calcul_distance.php";

	if(isset($_REQUEST['id']) AND !empty($_REQUEST['id']))
	{
		$_SESSION['ville']=$_REQUEST['id'];
		$_SESSION['tri']="1";
	}
	if(isset($_REQUEST['tri']) AND !empty($_REQUEST['tri']))
	{
		$_SESSION['tri']=$_REQUEST['tri'];
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
	$msg = $_SESSION['ville'];
}
if(isset($_SESSION['tri']) AND ($_SESSION['tri']!="1"))
{
	$sql="SELECT * FROM WD_liste_ile WHERE 1 ".$_SESSION['tri'];
	$msg = " Filtre avec succés";
}
else if (((isset($_SESSION['tri']) AND isset($_SESSION['ville']) AND $_SESSION['ville']=="1") AND ($_SESSION['tri']=="1")) || (!isset($_SESSION['tri']) AND !isset($_SESSION['ville'])))
{
	$sql="SELECT * FROM WD_liste_ile WHERE 1 ORDER BY liste_ile_nom ASC";
	$msg = "Aucun filtre";
}
$exe=query($sql);

			$msg_class = "alert-success";
			if(!empty($msg))
		{
			?>
			<div class="alert <?php echo $msg_class ?>" role="alert" style="width:70%; margin: 1vw auto; text-align:center;">
									<?php echo $msg; ?>
									</div>
			<?php
		}

?>
	<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
	<tr>
		<th class="th-sm"> Nom </th>
		<th class="th-sm"> Ville </th>
		<?php if(isset($_SESSION['ville']) AND ($_SESSION['ville']!="1")) { ?> <th class="th-sm"> Distance </th> <?php } ?>
		<th class="th-sm"> Meteo </th>
	</tr>
<?php

while($resultat=fetch_object($exe))
{
	?>
	<tr>
		<td><a href="ile/ville.php?ile=<?php echo $resultat->liste_ile_nom; ?>&ile_id=<?php echo $resultat->liste_ile_id; ?>" target="_blank" style="color:blue;"><?php echo $resultat->liste_ile_nom; ?></a></td>
		<td><?php echo $resultat->liste_ile_ville; ?></td>
		<?php if(isset($_SESSION['ville']) AND ($_SESSION['ville']!="1")) { ?> <td><?php echo $resultat->liste_ile_distance; ?> km</td> <?php } ?>
		<td>
		<?php
		if ( $resultat->liste_ile_ville == "Bandol")
		{
			$nom='bandol';
		}
		else if ( $resultat->liste_ile_ville == "La Seyne sur Mer")
		{
			$nom='seyne_sur_mer';
		}
		else if ( $resultat->liste_ile_ville == "Hyeres Les Palmiers")
		{
			$nom='hyeres';
		}
		else if ( $resultat->liste_ile_ville == "Six Fours Les Plages")
		{
			$nom='six_fours';
		}
		else if ( $resultat->liste_ile_ville == "Saint Raphael")
		{
			$nom='saint_raphael';
		}
		$meteo='<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#'.$nom.'">
					Meteo
					</button>';
		echo $meteo;
	?>
	</td>
	</tr>
	<?php
}
?>
</table>




