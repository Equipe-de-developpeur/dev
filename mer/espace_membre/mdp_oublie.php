<?php
header('Content-Type: text/html; charset=utf-8');
require "connect_pdo.php";


if(isset($_POST['submitre']))
{
	$recuperation_code = new Recuperation_code($_REQUEST['utilisateur_email']);
}


?>


<html>
	<head>
	<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<script src="../js/jquery-3.4.1.min.js"></script>
		<script src="../js/scroll.js"></script>
		<script src="../js/background.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Récuperation</title>
	</head>
	<body>
	<form method="post" action="" >
									<div class="row h-100 justify-content-center align-items-center">
									<img class="fond" src="../img/ocean.jpg" />
									<div class="container bordure rounded-lg" style="text-align:center;">
									
									<legend class="legend" style="font-size:4.5vw; font-weight:bold;"> Recuperation de Mot de passe </legend>
									<br/>
									<div class=" container form-group">
									<input type="email"  placeholder="Email" required="required" name="utilisateur_email"  />
									</div>
									
									
									<button type="submit" name="submitre" class="btn btn-outline-info my-2 my-sm-0" > Récupérer
									</button>
									
									<br>
									
									<?php
									if(isset($recuperation_code))
									{
										if($recuperation_code->utilisateur_erreur)
										{
											echo $recuperation_code->getErreur();
										}
										
									}
									?>
									</div>
									</div>
					</form>
					


	</body>
	</html>