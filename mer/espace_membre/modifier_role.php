<?php
include "connect_pdo.php";
$msg = "";
  $msg_class = "";
if(isset($_REQUEST['role']) AND !empty($_REQUEST['role']))
{
	$role=explode('_',$_REQUEST['role']);
	$vars[':utilisateur_role']=$role[0];
	$vars[':utilisateur_id']=$role[1];

	if($vars[':utilisateur_id']!=$_SESSION['utilisateur_id'])
	{
		$sql="UPDATE `WD_utilisateur` SET `utilisateur_role` =:utilisateur_role WHERE `utilisateur_id` =:utilisateur_id";
		$reqarticle=query($sql,$vars);
		
		$msg = "Modification du Role avec succés";
			$msg_class = "alert-success";
	}
	else
	{
		$msg="Impossible de changer votre role";
		$msg_class="alert-danger";
	}
	$exe = query("SELECT utilisateur_id, utilisateur_pseudo,utilisateur_role,utilisateur_nb_comm FROM WD_utilisateur ORDER BY `WD_utilisateur`.`utilisateur_pseudo` ASC");
	?>
	
	
	<?php
		if(!empty($msg))
		{
			?>
			<div class="alert <?php echo $msg_class ?>" role="alert" style="width:70%; margin: 1vw auto; text-align:center;">
									<?php echo $msg; ?>
									</div>
			<?php
		}
		?>
		<table class="tableau">
			<tr>
				<th>Utilisateur</th>
				<th>Role</th>
				<th>Commentaires</th>
				<th>Modification</th>
			</tr>
			<?php
			
			while($resultat= fetch_object($exe))
			{
				?>
				<tr>
					<td> <?php echo $resultat->utilisateur_pseudo; ?></td>
					<td> <?php echo $resultat->utilisateur_role; ?></td>
					<td> <?php echo $resultat->utilisateur_nb_comm; ?></td>
					<td>
						<select name="role_<?php echo $resultat->utilisateur_id; ?>" id="role" onchange="Change_role(this.value)">
							<option value="Membre_<?php echo $resultat->utilisateur_id; ?>" <?php if( $resultat->utilisateur_role=="Membre" ){?> selected="selected" <?php } ?>><?php echo "Membre"; ?></option>
							<option value="Admin_<?php echo $resultat->utilisateur_id; ?>" <?php if( $resultat->utilisateur_role=="Admin" ){?> selected="selected" <?php } ?>><?php echo "Admin"; ?></option>
						</select>
					</td>
				</tr>
				
				<?php
			}
			?>
		</table>
			<?php
	
}
?>