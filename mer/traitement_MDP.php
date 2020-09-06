<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
require "connect_pdo.php";
require "function.php";



if(isset($_POST['submit']))
{
	if(isset($_REQUEST['code_recuperation']) && !empty($_REQUEST['code_recuperation']))
	{
		if(isset($_REQUEST['utilisateur_password']) && !empty($_REQUEST['utilisateur_password']))
		{
			if(isset($_REQUEST['utilisateur_password2']) && !empty($_REQUEST['utilisateur_password2']))
			{
				if($_REQUEST['utilisateur_password']== $_REQUEST['utilisateur_password2'])
				{
					$sql="SELECT * FROM recuperation WHERE code_recuperation=:code_recuperation";
					$vars[':code_recuperation']=$_REQUEST['code_recuperation'];
					$exe=query($sql,$vars);
					$emailexist = $exe->rowCount();
					if($emailexist==1)
					{
						$resultat=fetch_object($exe);
						$utilisateur_email=$resultat->utilisateur_email;
						$sql="UPDATE utilisateur SET  utilisateur_password=:utilisateur_password WHERE utilisateur_email=:utilisateur_email";
						$utilisateur_password=sha1($_REQUEST['utilisateur_password']);
						$vars2[':utilisateur_email']=$utilisateur_email;
						$vars2['utilisateur_password']=$utilisateur_password;
						$exe=query($sql,$vars2);
						if($exe)
						{
							$message='<br> Vous avez bien changé votre Mot de Passe';
							$entete = "Content-type: text/html; charset= utf8\n";
							mail($utilisateur_email,'Changement MDP',$message,$entete);
							$sql=" DELETE FROM `recuperation` WHERE `recuperation`.`utilisateur_email` = :utilisateur_email ";
							$vars3[':utilisateur_email']=$utilisateur_email;
							query($sql,$vars3);
							header('Location: index.php');
						}
					}
					else
					{
						$erreur="Code de Recuperation incorrect";
					}
				}
				else
				{
					$erreur="Les Mots de passe sont differents";
				}
			}
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
	<title>Inscription</title>
</head>
<body>

<form method="post" action="" >
								<div class="row h-100 justify-content-center align-items-center">
								<img class="fond" src="img/ocean.jpg" />
								<div class="container bordure rounded-lg fond2">
								
								<legend class="legend"> Changement MDP </legend>
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