<?php
header('Content-Type: text/html; charset=utf-8');
require "connect_pdo.php";
require "function.php";
if(isset($_POST['submit']))
{
	if(!empty($_POST['utilisateur_nom']) && !empty($_POST['utilisateur_prenom']) && !empty($_POST['utilisateur_pseudo']) && !empty($_POST['utilisateur_email']) && !empty($_POST['utilisateur_password']) && !empty($_POST['utilisateur_password2'])  )
	{
		$utilisateur_nom = ($_POST['utilisateur_nom']); 
		$utilisateur_prenom = ($_POST['utilisateur_prenom']); 
		$utilisateur_email = ($_POST['utilisateur_email']);
		$utilisateur_pseudo = ($_POST['utilisateur_pseudo']);
		$utilisateur_password = ($_POST['utilisateur_password']);
		$utilisateur_password2 = ($_POST['utilisateur_password2']);
		$utilisateur_nom=strtolower($utilisateur_nom);
		$utilisateur_prenom=strtolower($utilisateur_prenom);
		$utilisateur_pseudo=strtolower($utilisateur_pseudo);
		$utilisateur_nom=ucfirst($utilisateur_nom);
		$utilisateur_prenom=ucfirst($utilisateur_prenom);
		$utilisateur_pseudo=ucfirst($utilisateur_pseudo);

			$pseudolength=strlen($utilisateur_nom);
			$pseudolength2=strlen($utilisateur_prenom);
			if(($pseudolength <=30) && ($pseudolength2 <=30) )
			{
				if(filter_var($utilisateur_email, FILTER_VALIDATE_EMAIL))
				{
					$vars[':utilisateur_email']=$utilisateur_email;
					$sql="SELECT * FROM utilisateur WHERE utilisateur_email =:utilisateur_email";
					$reqemail=query($sql,$vars);
					$emailexist = $reqemail->rowCount();
					if($emailexist == 0)
					{
						$vars2[':utilisateur_pseudo']=$utilisateur_pseudo;
						$sql="SELECT * FROM utilisateur WHERE utilisateur_pseudo =:utilisateur_pseudo";
						$reqpseudo=query($sql,$vars2);
						$pseudoexist = $reqpseudo->rowCount();
						if($pseudoexist == 0)
						{
							if($utilisateur_password == $utilisateur_password2)
							{
								$message="Votre pseudo : $utilisateur_pseudo";
							$message.="<br>";
							$message.="Voici votre mot de passe : $utilisateur_password ";
							$entete = "Content-type: text/html; charset= utf8\n";
							mail($utilisateur_email,'inscription',$message,$entete);
							
								$utilisateur_password=sha1($utilisateur_password);
								$vars3[':utilisateur_nom']=$utilisateur_nom;
								$vars3[':utilisateur_prenom']=$utilisateur_prenom;
								$vars3[':utilisateur_pseudo']=$utilisateur_pseudo;
								$vars3[':utilisateur_email']=$utilisateur_email;
								$vars3[':utilisateur_password']=$utilisateur_password;
								$sql="INSERT INTO utilisateur (utilisateur_nom,utilisateur_prenom,utilisateur_pseudo,utilisateur_email,utilisateur_password) VALUES (:utilisateur_nom,:utilisateur_prenom,:utilisateur_pseudo,:utilisateur_email,:utilisateur_password)";
								query($sql,$vars3);
								$erreur = "Votre Compte a été créé, un Email avec votre mot de passe a été envoyé ";
							}
							
							else
							{
								$erreur = "Votre password est different ";
							}
							
							
							
							
						}
						else
						{
							$erreur = "Votre pseudo est dejà utilisé ";
						}
						
					}
					else
					{
						$erreur = " Adresse mail déjà utilisée";
					}
				}
				else
				{
					$erreur = " Votre adresse mail n'est pas valide";
				}
			}
			else
			{
				$erreur = " Votre nom et votre prénom ne doit pas exceder 30 caracteres";
			}
	}
	else
	{
		$erreur = " Veuillez remplir tous les champs";
	}
	
}
?>

<html>
<head>
<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/scroll.js"></script>
		<script src="js/background.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Inscription</title>
</head>
<body>

<form method="post" action="" >
								<div class="row h-100 justify-content-center align-items-center">
								<img class="fond" src="img/ocean.jpg" />
								<div class="container bordure rounded-lg fond2">
								
								<legend class="legend"> Inscription </legend>
								<br/>
								<div class=" container form-group">
                                <input type="text" placeholder="Nom" required="required" name="utilisateur_nom" /> 
								</div>
								<div class=" container form-group">
                                <input type="text" placeholder="Prenom" required="required" name="utilisateur_prenom" /> 
								</div>
								<div class=" container form-group">
                                <input type="text" placeholder="Pseudo" required="required" name="utilisateur_pseudo"/> 
								</div>
								<div class=" container form-group">
                                <input type="email" placeholder="Adresse Mail" required="required" name="utilisateur_email"  /> 
								</div>
								<div class=" container form-group">
                                <input type="password" placeholder="Mot de passe" required="required" name="utilisateur_password"  /> 
								</div>
								<div class=" container form-group">
                                <input type="password" placeholder="Confirmation MDP" required="required" name="utilisateur_password2"  /> 
								</div>
								<br/>
								<button type="submit" name="submit"  class="btn btn-outline-info my-2 my-sm-0">Validation Inscription
								</button>
								<br/>
								<br/>
								<span>Vous avez déjà un compte ?</span>
								<a href="connection.php">Connectez vous</a>
								
								<?php
								if(isset($erreur))
								{
									echo ' <p style="color:red">⛔ '.$erreur.'</p>';
								}
								?>
								</div>
								</div>
                </form>
				





</body>
</html>