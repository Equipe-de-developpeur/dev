<?php
header('Content-Type: text/html; charset=utf-8');
require "connect_pdo.php";



if(isset($_POST['submit']))
{
	$recuperation_mdp = new Recuperation_mdp($_REQUEST['code_recuperation'],$_REQUEST['utilisateur_password'],$_REQUEST['utilisateur_password2']);			
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
								<div class="container bordure rounded-lg" style="text-align:center;">
								
								<legend class="legend" style="font-size:5vw; font-weight:bold;"> Changement MDP </legend>
								<br/>
								<div class=" container form-group">
                                <input type="text" placeholder="code_recuperation" required="required" name="code_recuperation"  value="<?php if(isset($_REQUEST['code']) && !empty($_REQUEST['code'])){echo $_REQUEST['code'];} ?>"/> 
								</div>
								<div class=" container form-group">
                                <input type="password" placeholder="Mot de passe" required="required" name="utilisateur_password"  /> 
								</div>
								<div class=" container form-group">
                                <input type="password" placeholder="Confirmation MDP" required="required" name="utilisateur_password2"  /> 
								</div>
								<br/>
								<button type="submit" name="submit"  class="btn btn-outline-info my-2 my-sm-0">Valider
								</button>
								<br/>
								<br>
								<?php
								if(isset($recuperation_mdp))
								{
									
									if($recuperation_mdp->utilisateur_erreur)
									{
										echo $changement_mdp->getErreur();
									}
								}
								?>
								
								</div>
								</div>
                </form>
				





</body>
</html>