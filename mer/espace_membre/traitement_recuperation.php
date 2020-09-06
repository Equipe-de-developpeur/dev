<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
require "connect_pdo.php";
require "function.php";



if(isset($_REQUEST['email']) && !empty($_REQUEST['email']))
{
	$utilisateur_email=$_REQUEST['email'];
	$code=passgenerator(10);
	$message="Voici votre code de récuperation: $code ";
	$message.='<br> <a href="localhost/exo_php_mysql/traitement_MDP.php?code='.$code.'" target="_blank">Cliquez ici pour changer le mot de passe</a>';
	$entete = "Content-type: text/html; charset= utf8\n";
	if(mail($utilisateur_email,'Récuperation MDP',$message,$entete))
	{
		$sql="SELECT * FROM recuperation WHERE utilisateur_email=:utilisateur_email";
		$vars[':utilisateur_email']=$utilisateur_email;
		$exe=query($sql,$vars);
		$emailexist = $exe->rowCount();
		if($emailexist==1)
		{
			$sql2="UPDATE recuperation SET  code_recuperation=:code_recuperation WHERE utilisateur_email=:utilisateur_email";
			$vars[':code_recuperation']=$code;
			query($sql2,$vars);
		}
		else
		{
			$sql2="INSERT INTO `recuperation` (`recuperation_id`, `code_recuperation`, `utilisateur_email`) VALUES (NULL, :code_recuperation, :utilisateur_email)";
			$vars[':code_recuperation']=$code;
			query($sql2,$vars);
		}
		header('Location: traitement_MDP.php');
		
	}
	else
	{
		$erreur="Echec de l'envoi de Mail Veuillez rééssayer plus tard";
		header('Location: mdp_oublie.php?erreur='.$erreur);
	}
	
}






?>
