<?php
header('Content-Type: text/html; charset=utf-8');
require "connect_pdo.php";
require "function.php";
if(isset($_SESSION['utilisateur_id']) AND $_SESSION['utilisateur_id']>0)
{
	
	require "menu_co.php";

		?>
		<h5 class="bienvenue"> BIENVENUE</h5>
		<?php
}
else
{
	

	

	if(isset($_POST['submitco']))
	{
		$utilisateur_pseudo = ($_POST['utilisateur_pseudo']);
		$utilisateur_password = $_POST['utilisateur_password'];
		$utilisateur_password2 = $_POST['utilisateur_password'];
		$vars[':utilisateur_pseudo']=$utilisateur_pseudo;
		if(!empty($utilisateur_pseudo) && !empty($utilisateur_password))
		{
			$utilisateur_password=sha1($utilisateur_password);
			$vars[':utilisateur_password']=$utilisateur_password;
			$sql="SELECT * FROM utilisateur WHERE utilisateur_pseudo =:utilisateur_pseudo AND utilisateur_password =:utilisateur_password";
			$requser=query($sql,$vars);
			$userexist = $requser->rowCount();
			if($userexist == 1)
			{
				if(isset($_POST['rememberme'])) {
					setcookie('pseudo', $utilisateur_pseudo, time() + 365*24*3600, null, null, false, true);
					setcookie('mot_de_passe', $utilisateur_password2, time() + 365*24*3600, null, null, false, true);
				}
				$userinfo = fetch_object($requser);
				$_SESSION['utilisateur_id'] = $userinfo->utilisateur_id;
				$_SESSION['utilisateur_pseudo']=$userinfo->utilisateur_pseudo;
				$_SESSION['utilisateur_image']=$userinfo->utilisateur_image;
				$_SESSION['utilisateur_role']=$userinfo->utilisateur_role;
				$_SESSION['utilisateur_email']=$userinfo->utilisateur_email;
				header("Location: mer.php");
			}
			else
			{
				$erreur = " Nom d'utilisateur ou Mot de passe invalide";
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
		<title>Connexion</title>
	</head>
	<body>
	<form method="post" action="" >
									<div class="row h-100 justify-content-center align-items-center">
									<img class="fond" src="img/nature.jpg" />
									<div class="container bordure rounded-lg fond2">
									
									<legend class="legend"> Connexion </legend>
									<br/>
									<div class=" container form-group">
									<input type="text" placeholder="Pseudo" required="required" name="utilisateur_pseudo" value="<?php if(isset($_COOKIE['pseudo'])){echo $_COOKIE['pseudo'];} ?>" /> 
									</div>
									<div class=" container form-group">
									<input type="password"  placeholder="🔒 Mot de Passe" required="required" name="utilisateur_password" value="<?php if(isset($_COOKIE['mot_de_passe'])){echo $_COOKIE['mot_de_passe'];} ?>" />
									</div>
									<input type="checkbox" name="rememberme" id="remembercheckbox" checked="checked" /><label for="remembercheckbox">:  Se souvenir de moi</label>
									<br/>
									<a href="mdp_oublie.php">Mot de passe oublié ?</a>
									<br /><br />
									
									<button type="submit" name="submitco" class="btn btn-outline-info my-2 my-sm-0" > Connexion
									</button>
									
									<br/>
									<span>Vous n'avez pas de  compte ?</span>
									<a href="inscription.php">S'inscrire</a>
									<br/>
									
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
<?php } ?>