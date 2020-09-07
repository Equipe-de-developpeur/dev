<?php 

include 'header_hebergement.php'; 
include 'config_bdd_insolite.php'; 

$req = $bdd->query('SELECT * FROM hebergement');
	while($donnees = $req->fetch()){	
	
	$nom = $donnees['nom'];
	$localisation = $donnees['localisation'];
	$notation = $donnees['notation'];
	$id_hebergement = $donnees['id_hebergement'];

	} 
?>
<article class="article article_1 container">
<form method="post" action="maj_traitement_insolite.php">
		
			<label>Nom de l'hébergement</label> 
			<input class="form-control" id="formGroupExampleInput" type="text" name="nom" value="<?php echo $nom;?>"> 
			<br>
			<label>Localisation</label> 
			<input class="form-control" id="formGroupExampleInput" type="text" name="localisation" value="<?php echo $localisation;?>">
			<br>
			<label>Notation</label>
			<input class="form-control" id="formGroupExampleInput" type="text" name="notation" value="<?php echo $notation;?>">
			<br>
			<label>id</label>
			<input class="form-control" id="formGroupExampleInput" type="text" name="id_hebergement" value="<?php echo $id_hebergement;?>">
			<br>
			<input class="btn btn-primary" type="submit" value="Valider" style="background-color: #ea5a00;border-style: none;">
		</form>
		
</article>