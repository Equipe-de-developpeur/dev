<?php
header('Content-Type: text/html; charset=utf-8');
require "connect_pdo.php";
require "function.php";
if(isset($_REQUEST['erreur']) && !empty($_REQUEST['erreur']))
{
	$erreur=$_REQUEST['erreur'];
}
if(isset($_POST['submitre']))
{
	if(isset($_POST['utilisateur_email']) && !empty($_POST['utilisateur_email']))
	{
		$utilisateur_email=$_POST['utilisateur_email'];
		$sql="SELECT * FROM utilisateur WHERE utilisateur_email=:utilisateur_email";
		$vars[':utilisateur_email']=$utilisateur_email;
		$exe=query($sql,$vars);
		$emailexist = $exe->rowCount();
		if($emailexist==1)
		{
			header('Location: traitement_recuperation.php?email='.$utilisateur_email);
		}
		else
		{
			$erreur="Email Incorrect";
		}
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
		<title>Récuperation</title>
	</head>
	<body>
	<form method="post" action="" >
									<div class="row h-100 justify-content-center align-items-center">
									<img class="fond" src="img/ocean.jpg" />
									<div class="container bordure rounded-lg fond2">
									
									<legend class="legend"> Recuperation de Mot de passe </legend>
									<br/>
									<div class=" container form-group">
									<input type="email"  placeholder="Email" required="required" name="utilisateur_email"  />
									</div>
									
									
									<button type="submit" name="submitre" class="btn btn-outline-info my-2 my-sm-0" > Récupérer
									</button>
									
									
									
									<?php
									if(isset($erreur))
									{
										echo ' <p> ⛔'.$erreur.'</p>';
									}
									?>
									</div>
									</div>
					</form>
					


	</body>
	</html>