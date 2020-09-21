<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/hebergement_insolite.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,600;0,700;1,400&display=swap" rel="stylesheet">
    <title>Hébergements Insolites</title>
</head>

<body>
	<?php include 'header_hebergement.php';?>

	<div class="main container-fluid">

    <h2>Les Hébergements insolites dans le var</h2>

    <article class="article article_1 container">
        <h2>Le label hôtes insolites<img src="img/plant.png" alt="Mini logo feuille"></h2>
		<br>
		<br>
        <p>Un éco-hébergement ou hébergement écologique est un type d'hébergement touristique qui répond aux critères de respect de l'environnement garantis par un label environnemental. Face à une offre locative de plus en plus concurrentielle, à un essor du tourisme durable et une clientèle en recherche de dépaysement et de rupture avec le monde moderne, les porteurs de projets insolites ont le vent en poupe !</p>
    
        <h2>Quelques hébergement insolites situés dans le var</h2>
		<br>
		
        <?php include 'config_bdd_insolite.php'; ?>
		
		<table class="table table-bordered table-gite">
            <thead class="thead-dark">
				<th>Nom de l'hébergement</th>
                <th>Situé à</th>
                <th>Notation</th>
            </thead>
			
		<?php
			$req = $bdd->query('SELECT * FROM hebergement');
			while($donnees = $req->fetch()){	
        ?>
		
            <tr>
              <td><?php echo $donnees['nom'];?></td>
              <td><?php echo $donnees['localisation'];?></td>
              <td><?php echo $donnees['notation'];?></td>
            </tr>
			<?php
			}
			?>
		
		</table>
		<h2>Inscription Hébergement :</h2>
		<br>
		<br>
		
		<form method="post" action="insertion.php">
		
			<label>Nom de l'hébergement</label> 
			<input class="form-control" id="formGroupExampleInput" type="text" name="nom" placeholder="Saisissez le nom de votre hébergement"> 
			<br>
			<label>Localisation</label> 
			<input class="form-control" id="formGroupExampleInput" type="text" name="localisation" placeholder="Saisissez la ville où se situe (ou à proximité de) votre hébergement">
			<br>
			<label>Notation</label>
			<input class="form-control" id="formGroupExampleInput" type="text" name="notation" placeholder="La note que vous attribuez à cet hébergement (notation de 1 à 5)">
			<br>
			<input class="btn btn-primary" type="submit" value="Valider" style="background-color: #ea5a00;border-style: none;">
		</form>	
    </article>
	</div>

	<?php include 'footer.php'; ?>
</body>
</html>