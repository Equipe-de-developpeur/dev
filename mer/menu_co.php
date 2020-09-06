<?php
//testSession();
?>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

 <style>
 
 .col-sm-8
{
	margin:auto;
}
.age
{
	text-align:right;
}
.eleve
{
	text-align:left;
}
.form-check
{
	padding-left:45%;
}
select
{
	margin-right:1vw;
}
.row
{
	font-size:1vw;
}
select {
    border: 2px outset aquamarine;
}

.btn-outline-info {
    color: black;
    border: 2px solid black;
}
.bordure
{
	border:2px solid black;
	padding:2vw;
	background-color:silver;
}
.navbar-nav
{
	margin:auto;
}
.menu
{
	position:absolute;
	width:100%;
	top:0;
}
legend
{
	text-align:center;
	font-size:2.5vw;
	padding-bottom:1vw;
}
.bienvenue
{
	text-align:center;
	color:white;
	font-size:6vw;
}
.menu_navbar
{
	background-color:rgba(0,0,0,0.3);
}
a {
    color: white;
    text-decoration: none;
    background-color: transparent;
}
a:hover
{
	color:white;
	text-decoration:none!important;
}
.image_pro
{
	width:2vw; 
	margin-right:1vw;
}
@media screen and (max-device-width:1024px)
{
	.image_pro
	{
		width:4vw;
	}
}
</style>
</head>
<div class="menu">
<nav class="navbar navbar-expand-sm menu_navbar navbar-dark">
<div class="navbar-left" style="display:contents;">
	<?php if(isset($_SESSION['utilisateur_image']) AND !empty($_SESSION['utilisateur_image']))
								{
									?>
									<img class="image_pro"src="img/photo_profil/<?php echo $_SESSION['utilisateur_image'];?>" />
									<?php
								}
								?>
	<a href="profil_inter.php" style="color:white;"><?php if(isset($_SESSION['utilisateur_pseudo'])) {echo $_SESSION['utilisateur_pseudo'];}  ?> (<?php if(isset($_SESSION['utilisateur_role'])) {echo $_SESSION['utilisateur_role'];}  ?>)</a>
	</div>
  <div style="margin:auto; text-align:center;">
  <?php if(isset($_SESSION['utilisateur_role']) AND ($_SESSION['utilisateur_role']== "Admin"))
  {
	  ?>
	  
          <a href="liste_membres.php" style="color:white;">Admin</a>
        
	<?php
  }
  ?>
  </div>
  <div class="navbar-right">
  <?php 
  if(isset($_SESSION['utilisateur_id']) AND !empty($_SESSION['utilisateur_id']))
  {
	  ?>
	  <a href="deconnexion.php" style="color:white;">Déconnexion</a>
	  <?php
  }
  else
  {
	 ?>
		<a href="connection.php" style="color:white; text-decoration:none;">S'inscrire / Se connecter</a>
	<?php
  }
	?>
	</div>
</nav>
</div>
