<?php
testSession();
?>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
	padding-bottom:3vw;
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
</style>
</head>
<div class="menu">
<nav class="navbar navbar-expand-sm menu_navbar navbar-dark">
<div class="navbar-left" style="display:contents;">
	<?php if(isset($_SESSION['utilisateur_image']) AND !empty($_SESSION['utilisateur_image']))
								{
									?>
									<img src="img/photo_profil/<?php echo $_SESSION['utilisateur_image'];?>" style="width:2vw; margin-right:1vw;"/><br>
									<?php
								}
								?>
	<a href="profil.php"><?php if(isset($_SESSION['utilisateur_pseudo'])) {echo $_SESSION['utilisateur_pseudo'];}  ?></a>
	</div>
  <ul class="navbar-nav">
  <?php if(isset($_SESSION['utilisateur_role']) AND ($_SESSION['utilisateur_role']== "Admin"))
  {
	  ?>
	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="liste_membres.php">Liste des membres</a>
        </div>
      </li>
	<?php
  }
  ?>
  </ul>
  <div class="navbar-right">
	<a href="deconnexion.php">Déconnexion</a>
	</div>
</nav>
</div>
