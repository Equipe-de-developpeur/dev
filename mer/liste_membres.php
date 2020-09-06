<?php
header('Content-Type: text/html; charset=utf-8');
include "header.php";
require "function.php";
testSession_admin();
?>
<html>
	<head>
    	<title>Administrateur</title>
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
		width:80%;
		margin:auto;
		font-size:2vw;
	}
	.tableau th, .tableau td 
	{
		padding: 0.5vw;
		vertical-align: top;
		text-align:center;
		border-top: 1px solid #dee2e6;
        border-top-color: rgb(222, 226, 230);
	}
	@media screen and (max-device-width:1024px)
	{
		.tableau
		{
			font-size:3vw;
		}
	}
	</style>
    </head>
    <body style="background-color:black;">
    
	
		
        <hr style="margin-top:60px;">
        <div>
		<table class="tableau">
			<tr>
				<th>Utilisateur</th>
				<th>Role</th>
				<th>Commentaires</th>
				<th>Modification</th>
			</tr>
			<?php
			$reqarticle = query("SELECT utilisateur_id, utilisateur_pseudo,utilisateur_role,utilisateur_nb_comm FROM utilisateur ORDER BY `utilisateur`.`utilisateur_pseudo` ASC");
			while($resultat= fetch_object($reqarticle))
			{
				
				?>
				<tr>
					<td> <?php echo $resultat->utilisateur_pseudo; ?></td>
					<td> <?php echo $resultat->utilisateur_role; ?></td>
					<td> <?php echo $resultat->utilisateur_nb_comm; ?></td>
					<td>
						<select name="role_<?php echo $resultat->utilisateur_id; ?>" id="role" >
							<option value="Membre_<?php echo $resultat->utilisateur_id; ?>" <?php if( $resultat->utilisateur_role=="Membre" ){?> selected="selected" <?php } ?>><?php echo "Membre"; ?></option>
							<option value="Admin_<?php echo $resultat->utilisateur_id; ?>" <?php if( $resultat->utilisateur_role=="Admin" ){?> selected="selected" <?php } ?>><?php echo "Admin"; ?></option>
						</select>
					</td>
				</tr>
				<script>
				
		$(document).ready(function(){
        $("[name='role_<?php echo $resultat->utilisateur_id; ?>'] option").click(function(){
        	var selectValue = $("[name='role_<?php echo $resultat->utilisateur_id; ?>'] option:selected").val();
            if(selectValue){
				
				
				location.replace('modifier_role.php?role='+selectValue);
            }
        });
    });
		</script>
				<?php
			}
			?>
		</table>
		<hr>
        </div>
		
    </body>
</html>
