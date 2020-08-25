<style>
/* Header */

	#header {
		position: absolute;
		z-index: 10000;
		left: 0;
		top: 6vw;
		width: 100%;
		background: rgba(0, 0, 0, 0);
		height: 6vw;
		line-height: 3em;
		box-shadow: 0 0 0.15em 0 rgba(0, 0, 0, 0.1);
		color:white;
	}
	#header img
	{
		height: 7vw;
		position: absolute;
		right: 5vw;
		top: -5.8vw;
	}
		

		#header nav {
			position: absolute;
			top: 1.5vw;
			height: 5vw;
			line-height: 3vw;
			width:50%;
			background: rgba(0, 0, 0, 0.5);
		}

			#header nav ul {
				margin: 0;
				text-align:end;
				padding-right:3vw;
			}

				#header nav ul li {
					display: inline-block;
					font-size: 1.6vw;
					font-family: fira sans extra condensed;
					font-weight: bold;
				}

					#header nav ul li a {
						display: block;
						color: inherit;
						text-decoration: none;
						height: 3em;
						line-height: 3em;
						padding: 0 0.5em 0 0.5em;
						outline: 0;
					}

		@media screen and (max-width: 736px) {

			#header {
				height: 2.5em;
				line-height: 2.5em;
			}

				
				}
				@media screen and (max-width: 767px) {
					#header nav ul li {
						font-size:2.5vw;
					}
					#header nav {
						width:70%;
						height:7vw;
					}
				}
</style>




<header id="header">
				<nav>
					<ul>
						<li><a href="index.html">Accueil</a></li>
						<li><a href="<?php echo $menu1;?>.php"><?php echo ucfirst($menu1);?></a></li>
						<li><a href="<?php echo $menu2;?>.php"><?php echo ucfirst($menu2);?></a></li>
						<li><a href="<?php echo $menu3;?>.php"><?php echo ucfirst($menu3);?></a></li>
					</ul>
				</nav>
				<img src="img/logo.png">
			</header>