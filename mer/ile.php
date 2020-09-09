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
<?php include "header.php"; ?>
<?php include "ile/traitement_tableau.php"; ?>
<div class="deroulant" >
<select name="ville" id="liste_ville" >
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
<select name="tri" id="tri" >
											<option value="1" ><?php if(isset($_SESSION['tri']) AND  $_SESSION['tri'] !="1"){echo "Desactiver Filtre";} else{ echo "Selectionner un Filtre";} ?></option>
											<option value="ORDER BY liste_ile_nom ASC" <?php if(isset($_SESSION['tri']) AND $_SESSION['tri'] == "ORDER BY liste_ile_nom ASC" ){?> selected="selected" <?php } ?>>Nom d'Ile croissante</option>
											<option value="ORDER BY liste_ile_nom DESC" <?php if(isset($_SESSION['tri']) AND $_SESSION['tri'] == "ORDER BY liste_ile_nom DESC" ){?> selected="selected" <?php } ?>>Nom d'Ile décroissante</option>
											<option value="ORDER BY liste_ile_ville ASC" <?php if(isset($_SESSION['tri']) AND $_SESSION['tri'] == "ORDER BY liste_ile_ville ASC" ){?> selected="selected" <?php } ?>>Ville à proximité croissante</option>
											<option value="ORDER BY liste_ile_ville DESC" <?php if(isset($_SESSION['tri']) AND $_SESSION['tri'] == "ORDER BY liste_ile_ville DESC" ){?> selected="selected" <?php } ?>>Ville à proximité décroissante</option>
											<?php if(isset($_SESSION['ville']) AND ($_SESSION['ville']!="1")) { ?><option value="ORDER BY liste_ile_distance ASC" <?php if(isset($_SESSION['tri']) AND $_SESSION['tri'] == "ORDER BY liste_ile_distance ASC" ){?> selected="selected" <?php } ?>>Distance croissante</option><?php } ?>
											<?php if(isset($_SESSION['ville']) AND ($_SESSION['ville']!="1")) { ?><option value="ORDER BY liste_ile_distance DESC" <?php if(isset($_SESSION['tri']) AND $_SESSION['tri'] == "ORDER BY liste_ile_distance DESC" ){?> selected="selected" <?php } ?>>Distance décroissante</option><?php } ?>
</select>
</div>
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
		<td><a href="ile/ville.php?ile=<?php echo $resultat->liste_ile_nom; ?>" target="_blank" style="color:blue;"><?php echo $resultat->liste_ile_nom; ?></a></td>
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
<?php include "footer.php"; ?>
</body>
</html>
