<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
require "connect_pdo.php";
require "function.php";
require "menu.php";
?>
<html>
	<head>
    	<title>Liste news</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<style>
	form
	{
		text-align:center;
	}
	.tableau
	{
		background:#000028;
		color:gold;
		width:50%;
		margin:auto;
	}
	.tableau th, .tableau td 
	{
		padding: 0.5vw;
		vertical-align: top;
		text-align:center;
		border-top: 1px solid #dee2e6;
        border-top-color: rgb(222, 226, 230);
	}
	</style>
    </head>
    <body>
    
	
		
        <hr>
        <div>
		<table class="tableau">
			<tr>
				<th>Utilisateur</th>
				<th>Role</th>
				<th>Nombre de commentaires</th>
				<th>Modification</th>
				<th>Suppression</th>
			</tr>
			<?php
			$reqarticle = query("SELECT utilisateur_id, utilisateur_pseudo,utilisateur_role,utilisateur_nb_comm FROM utilisateur");
			while($resultat= fetch_object($reqarticle))
			{
				
				?>
				<tr>
					<td> <?php echo $resultat->utilisateur_pseudo; ?></td>
					<td> <?php echo $resultat->utilisateur_role; ?></td>
					<td> <?php echo $resultat->utilisateur_nb_comm; ?></td>
					<td><a href="ajout_news.php?id=<?php echo $resultat->utilisateur_id; ?>"><input type="button" name="modif" value="Modifier"></input></a></td>
					<td><a href="supprime_news.php?id=<?php echo $resultat->utilisateur_id; ?>"><input type="button" name="supprimer" value="Supprimer"></input></a></td>
				</tr>
				<?php
			}
			?>
		</table>
		<hr>
        </div>
    </body>
</html>
