<?php
header('Content-Type: text/html; charset=utf-8');
require "connect_pdo.php";
require "fonctions.php";
if(isset($_POST['submit']))
{
	if(!empty($_POST['utilisateur_email'])  )
	{
		
		$utilisateur_email = ($_POST['utilisateur_email']);
			
				if(filter_var($utilisateur_email, FILTER_VALIDATE_EMAIL))
				{
					$vars[':utilisateur_email']=$utilisateur_email;
					$sql="SELECT * FROM utilisateur WHERE utilisateur_email =:utilisateur_email";
					$reqemail=query($sql,$vars);
					$emailexist = $reqemail->rowCount();
					if($emailexist == 1)
					{
						
							$utilisateur_password=passgenerator(10);
							$mail=envoi_mail($utilisateur_email,$utilisateur_password);
							if($mail==1)
							{
								$utilisateur_password=sha1($utilisateur_password);
								
								$vars3[':utilisateur_email']=$utilisateur_email;
								$vars3[':utilisateur_password']=$utilisateur_password;
								$sql="UPDATE utilisateur SET utilisateur_password=:utilisateur_password WHERE utilisateur_email=:utilisateur_email";
								query($sql,$vars3);
								$erreur = "un Email avec votre nouveau mot de passe a été envoyé ";
							}
							else
							{
								$erreur = "Erreur d'envoi de l'email ";
							}
							
							
						
						
					}
					else
					{
						$erreur = " Adresse mail non enregistré";
					}
				}
				else
				{
					$erreur = " Votre adresse mail n'est pas valide";
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
	<title>Mot de passe oublié</title>
</head>
<body>

<form method="post" action="" >
								<div class="row h-100 justify-content-center align-items-center">
								<img class="fond" src="img/ocean.jpg" />
								<div class="container bordure rounded-lg fond2">
								
								<legend class="legend"> Mot de Passe oublié </legend>
								<br/>
								<div class=" container form-group">
                                <input type="email" placeholder="Adresse Mail" required="required" name="utilisateur_email"  /> 
								</div>
								
								<br/>
								<button type="submit" name="submit"  class="btn btn-outline-info my-2 my-sm-0">Générer un Nouveau Mot de Passe
								</button>
								<br/>
								<br/>
								
								<?php
								if(isset($erreur))
								{
									echo ' <p style="color:red"> '.$erreur.'</p>';
									echo '<a href="index.php">Connectez vous</a>';
								}
								?>
								</div>
								</div>
                </form>
				





</body>
</html>