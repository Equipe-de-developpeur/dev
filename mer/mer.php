<!DOCTYPE HTML>
<html>
	<head>
		<title>Mer</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/mer_theme.css" />
		
  <link rel="stylesheet" style="text/css" href="css/introduction.css">
		<script src="js/redirection.js"></script>
	</head>
	<body>
	<?php
	include "header.php";
	include "introduction.php";
	?>
	<div class="blue">
		<div id="theme" class="row-flex">
			
				<div class="col-sm-3 theme">
					<header class="header_mer">
					Plage
					</header>
					<img src="img/plage.jpg" style="width:95%;">
					<div class="col-sm-12 text_mer">
					<?php 
					include "contenu_plage.php";
					?>
					</div>
					<footer class="footer_mer">
					<button class="bouton_mer">Site</button>
					</footer>
				</div>
				<div class="col-sm-3 theme">
					<header class="header_mer">
					Port
					</header>
					<img src="img/port.jpg" style="width:95%;">
					<div class="col-sm-12 text_mer">
					<?php 
					include "contenu_port.php";
					?>
					</div>
					<footer class="footer_mer">
					<button class="bouton_mer">Site</button>
					</footer>
				</div>
				<div class="col-sm-3 theme">
					<header class="header_mer">
					Ile
					</header>
					<img src="img/ile.jpg" style="width:95%;">
					<div class="col-sm-12 text_mer">
					<?php 
					include "contenu_ile.php";
					?>
					</div>
					<footer class="footer_mer">
					<button class="bouton_mer">Site</button>
					</footer>
				</div>
			
		</div>
	</div>
	</body>
</html>