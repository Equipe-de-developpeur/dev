<?php

header('Content-Type: text/html; charset=utf-8');
require "connect_pdo.php";
require "function.php";
require "menu_co.php";
include "update_image.php";
testSession();
if(isset($_POST['submit']))
	
{

		if(isset($_REQUEST['utilisateur_password']) && !empty($_REQUEST['utilisateur_password']))
		{
			if(isset($_REQUEST['utilisateur_password2']) && !empty($_REQUEST['utilisateur_password2']))
			{
				if($_REQUEST['utilisateur_password']== $_REQUEST['utilisateur_password2'])
				{
					
						$utilisateur_password=sha1($_REQUEST['utilisateur_password']);
						$vars2['utilisateur_password']=$utilisateur_password;
						
						if(updateDefault($_SESSION['utilisateur_id'],"utilisateur","utilisateur_id",$vars2))
						{
							$sql="SELECT utilisateur_email FROM utilisateur WHERE utilisateur_id=:utilisateur_id";
							$vars[':utilisateur_id']=$_SESSION['utilisateur_id'];
							$exe=query($sql,$vars);
							$resultat=fetch_object($exe);
							$utilisateur_email=$resultat->utilisateur_email;
							$message='<br> Vous avez bien changé votre Mot de Passe';
							$entete = "Content-type: text/html; charset= utf8\n";
							mail($utilisateur_email,'Changement MDP',$message,$entete);
						}
						
					
				}
				else
				{
					$erreur="Les Mots de passe sont differents";
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
		<link rel="stylesheet" href="css/update_image.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php if(isset($_SESSION['utilisateur_pseudo'])) {echo $_SESSION['utilisateur_pseudo'];}  ?></title>
</head>
<body>

<form method="post" action="" enctype="multipart/form-data">
								<div class="row h-100 justify-content-center align-items-center" style="padding-top:7vw;">
								<img class="fond" src="img/ocean.jpg" />
								<div class="container bordure rounded-lg fond2">
								
								<legend class="legend"><?php if(isset($_SESSION['utilisateur_pseudo'])) {echo $_SESSION['utilisateur_pseudo'];}  ?></legend>
								<br>
								<?php if(isset($_SESSION['utilisateur_image']) AND !empty($_SESSION['utilisateur_image']))
								{
									?>
									<img src="img/photo_profil/<?php echo $_SESSION['utilisateur_image'];?>" style="width:15vw;"/><br>
									<?php
								}
								?>
								<!-- Ajouter une image -->
								<?php if (!empty($msg)): ?>
									<div class="alert <?php echo $msg_class ?>" role="alert">
									<?php echo $msg; ?>
									</div>
								<?php endif; ?>
											<button style="font-weight:bold" type="button" class="bouton1" data-toggle="modal" data-target="#openfile2">Update Photo Profil</button>
	<div class="modal fade" id="openfile2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content ouvrir">
				<div class="modal-header">
					<h5 class="modal-title" id="openfile2" style="color:black;">Ajouter une photo !</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
				</div>
				<div class="modal-body">
 <div class="container">
    <div class="row">
      <div class="form-div">
        <form action="" method="post" enctype="multipart/form-data">
          <h2 class="text-center mb-3 mt-3">Update Avatar</h2>
          <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4>Update image</h4>
              </div>
              <img src="img/avatar.png" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
          </div>
          <div class="form-group">
            <button type="submit" name="save_image" class="btn btn-primary btn-block">Upload</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
		</div>
	</div>
</div>
								
							<!--   *****************************************   -->
							<br>
							<span> Mon Adresse mail </span>
							<div class=" container form-group">
								<p><?php echo $_SESSION['utilisateur_email']; ?> </p>
							</div>
							<span> Mon role </span>
							<div class=" container form-group">
								<p><?php echo $_SESSION['utilisateur_role']; ?> </p>
							</div>
							<span> Modifier Mot de Passe </span>
							
								<div class=" container form-group">
                                <input type="password" placeholder="Mot de passe" name="utilisateur_password" value="<?php if(isset($_COOKIE['mot_de_passe'])){echo "";} ?>" /> 
								</div>
								<div class=" container form-group">
                                <input type="password" placeholder="Confirmation MDP" name="utilisateur_password2" value="<?php if(isset($_COOKIE['mot_de_passe'])){echo "";} ?>" /> 
								</div>
								<br/>
								<button  class="btn btn-outline-info my-2 my-sm-0" style="color:black;"><a href="<?php echo $_SESSION['retour_profil']; ?>"style="color:black; text-decoration:none;">Retour</a>
								</button>
								<button type="submit" name="submit"  class="btn btn-outline-info my-2 my-sm-0" style="color:black;">Valider
								</button>
								<br/>
								
								<?php
								if(isset($erreur))
								{
									echo ' <p style="color:red">⛔ '.$erreur.'</p>';
								}
								?>
								<?php
								if(isset($message))
								{
									echo ' <p style="color:green">'.$message.'</p>';
								}
								?>
								</div>
								</div>
                </form>
				



<script>
function triggerClick(e) {
  document.querySelector('#profileImage').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}
</script>

</body>
</html>