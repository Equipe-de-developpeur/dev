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
	</head>
	<body>
	<?php
	include "header.php";
	include "introduction.php";
	?>
	<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-interval="false">
	<!-- Indicateur Carrousel -->
  <!--<ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol> -->
  
  <div class="carousel-inner">
    <div class="carousel-item active">
		<div id="theme" class="row-flex">
      <div class="col-sm-12 theme_mobile plage_back">
					
					<div class="col-sm-12 text_mer_mobile">
			
					</div>
					<footer class="footer_mer_mobile">
					<header class="header_mer_mobile">
					PLAGE
					</header>
					<?php 
					include "contenu_plage.php";
					?>
					<button class="bouton_mer_mobile">DÉCOUVRIR</button>
					</footer>
				</div>
			</div>
    </div>
    <div class="carousel-item">
	<div id="theme" class="row-flex">
      <div class="col-sm-12 theme_mobile port_back">
					
					<div class="col-sm-12 text_mer_mobile">
					
					</div>
					<footer class="footer_mer_mobile">
					<header class="header_mer_mobile">
					PORT
					</header>
					<p>
					<?php 
					include "contenu_port.php";
					?>
					</p>
					<button class="bouton_mer_mobile">DÉCOUVRIR</button>
					</footer>
				</div>
			</div>
    </div>
    <div class="carousel-item">
	<div id="theme" class="row-flex">
      <div class="col-sm-12 theme_mobile ile_back">
					
					<div class="col-sm-12 text_mer_mobile">
					
					</div>
					<footer class="footer_mer_mobile">
					<header class="header_mer_mobile">
					ÎLE
					</header>
					<p>
					<?php 
					include "contenu_ile.php";
					?>
					</p>
					<button class="bouton_mer_mobile">DÉCOUVRIR</button>
					</footer>
				</div>
			</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

	</body>
</html>