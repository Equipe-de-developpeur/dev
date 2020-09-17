<?php include "header.php"; ?>
<?php include "ile/meteo.php"; 
$_SESSION['ville']="1";
$_SESSION['tri']="1";
$sql2="SELECT DISTINCT ville_proxi_nom FROM WD_ville_proxi WHERE 1 ORDER BY ville_proxi_nom ASC ";
$exe2=query($sql2);
$sql="SELECT * FROM WD_liste_ile WHERE 1 ORDER BY liste_ile_nom ASC";
$exe=query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Liste Ile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
.deroulant
{
	width:100%;
	text-align:center;
	margin-top:1vw;
}
.table
{
	width:90%!important;
	margin:auto;
}
</style>
</head>
<body style="background-color:burlywood;">

<div class="deroulant" >
<select name="ville" id="liste_ville" onchange="showVille(this.value)" >
											<option value="1">Selectionner Votre Ville</option>
											<?php
											while($resultat2=fetch_object($exe2))
											{
											
												?>
												<option value="<?php echo $resultat2->ville_proxi_nom; ?>" <?php if(isset($_SESSION['ville']) AND $_SESSION['ville'] == $resultat2->ville_proxi_nom ){?> selected="selected" <?php } ?>><?php echo $resultat2->ville_proxi_nom; ?></option>
												<?php
											
											}
											?>
											</select>
<select name="tri" id="tri" onchange="showTri(this.value)">
											<option value="1" ><?php if(isset($_SESSION['tri']) AND  $_SESSION['tri'] !="1"){echo "Desactiver Filtre";} else{ echo "Selectionner un Filtre";} ?></option>
											<option value="ORDER BY liste_ile_nom ASC" <?php if(isset($_SESSION['tri']) AND $_SESSION['tri'] == "ORDER BY liste_ile_nom ASC" ){?> selected="selected" <?php } ?>>Nom d'Ile croissante</option>
											<option value="ORDER BY liste_ile_nom DESC" <?php if(isset($_SESSION['tri']) AND $_SESSION['tri'] == "ORDER BY liste_ile_nom DESC" ){?> selected="selected" <?php } ?>>Nom d'Ile décroissante</option>
											<option value="ORDER BY liste_ile_ville ASC" <?php if(isset($_SESSION['tri']) AND $_SESSION['tri'] == "ORDER BY liste_ile_ville ASC" ){?> selected="selected" <?php } ?>>Ville à proximité croissante</option>
											<option value="ORDER BY liste_ile_ville DESC" <?php if(isset($_SESSION['tri']) AND $_SESSION['tri'] == "ORDER BY liste_ile_ville DESC" ){?> selected="selected" <?php } ?>>Ville à proximité décroissante</option>
											
</select>
</div>
<div style="max-width:100%; overflow:auto;" id="ile_var">
<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
	<tr>
		<th class="th-sm"> Nom </th>
		<th class="th-sm"> Ville </th>
		<?php if(isset($_SESSION['ville']) AND ($_SESSION['ville']!="1")) { ?> <th class="th-sm"> Distance </th> <?php } ?>
		<th class="th-sm"> Meteo </th>
	</tr>
<?php
if(isset($exe3))
{
	$requete=$exe3;
	}
else
{
	$requete=$exe;
}

while($resultat=fetch_object($requete))
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
</div>
<?php include "footer.php"; ?>
</body>
</html>
