<?php
include "formulaire_co.php";
?>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/formulaire_co.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script src="../js/bootstrap.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/bootstrap.bundle.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

 <style>
 

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
									<img class="image_pro"src="../img/photo_profil/<?php echo $_SESSION['utilisateur_image'];?>" />
									<?php
								}
								?>
	<a href="../espace_membre/profil.php" style="color:white;"><?php if(isset($_SESSION['utilisateur_pseudo'])) {echo $_SESSION['utilisateur_pseudo'];}  ?> </a>
	</div>
  <div style="margin:auto; text-align:center;">
  <?php if(isset($_SESSION['utilisateur_role']) AND ($_SESSION['utilisateur_role']== "Admin"))
  {
	  ?>
	  
          <a href="../espace_membre/liste_membres.php" style="color:white;">Admin</a>
        
	<?php
  }
  ?>
  </div>
  <div class="navbar-right">
  <?php 
  if(isset($_SESSION['utilisateur_id']) AND !empty($_SESSION['utilisateur_id']))
  {
	  ?>
	  <a href="../espace_membre/deconnexion.php" style="color:white;">Déconnexion</a>
	  <?php
  }
  else
  {
	 ?>
		<a href=""  data-toggle="modal" data-target="#modalLRForm" style="color: white !important;">S'inscrire / Se connecter</a>
	<?php
  }
	?>
	</div>
</nav>
</div>