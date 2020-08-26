<script type="text/javascript" src="js/jquery-3.5.1.js"></script>
<script>
$(document).ready(function() {
			$('#menu_vertical_bouton').attr('disabled', 'disabled');
  			$("#menu_vertical").show(500);
			$("#menu_vertical_bouton").addClass('menu1');
			setTimeout(function() { 
			$("#menu_vertical").hide(500);
		  $("#menu_vertical_bouton").removeClass('menu1');
		  $('#menu_vertical_bouton').removeAttr('disabled', 'disabled');
    }, 2000);
});
var menuEnabled = false; 
$(document).ready(function() {
        $("#menu_vertical_bouton").on("click", switchmenu);
        }
      );
      
      function switchmenu(){
        menuEnabled = !menuEnabled;
        if(menuEnabled){
			$('#menu_vertical_bouton').attr('disabled', 'disabled');
			$("#menu_vertical").show(500);
			$("#menu_vertical_bouton").addClass('menu1');
		  
        } else {
			$('#menu_vertical_bouton').attr('disabled', 'disabled');
			$("#menu_vertical").hide(500);
			$("#menu_vertical_bouton").removeClass('menu1');
        }
		setTimeout(function() {
		$('#menu_vertical_bouton').removeAttr('disabled', 'disabled');
		}, 1200);
      };
	  
$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    if(scroll > 200){
			$("#menu_vertical").css({
        position:'fixed', top:'13.5vw'
    });  
	$("#header nav").css({
        position:'fixed'
    }); 
	}
	else
	{
					$("#menu_vertical").css({
        position:'absolute', top:'13.5vw'
    });  
	$("#header nav").css({
        position:'absolute'
    });
	}
	 
});	  
</script>
<style>
		.menu1
		{
			background-color:white!important;
			border:4px solid blueviolet!important;
			color:blue!important;
		}
		#menu_vertical {
			position: absolute;
		z-index: 10000;
		left:0;
		display:none;
		top: 13.5vw;
		max-width:25%;
		background: rgba(0, 0, 0, 0.7);
		max-height: 30vw;
		line-height: 3em;
		box-shadow: 0 0 0.15em 0 rgba(0, 0, 0, 0.1);
		color:white;
		}
		#menu_vertical ul {
				margin: 0;
				padding-right:3vw;
				display:contents;
			}

				#menu_vertical ul li {
					font-size: 1.6vw;
					font-family: fira sans extra condensed;
					font-weight: bold;
					list-style:none;
					margin-right:3vw;
					margin-left:2vw;
					
				}
				#menu_vertical ul li:hover
				{
					color:burlywood;
				}
					#menu_vertical ul li a {
						display: block;
						color: inherit;
						text-decoration: none;
						height: 3em;
						line-height: 3em;
						padding: 0 0.5em 0 0.5em;
						outline: 0;
					}
#menu_vertical_bouton
{
	background-color: transparent;
	border: 2px solid white;
	font-size: 1.6vw;
	font-family: fira sans extra condensed;
	font-weight: bold;
	color:burlywood;
}

	.navbar-toggler-icon {
		background-image: url('https://mdbootstrap.com/img/svg/hamburger3.svg?color=00FBD8')!important;
		width: 2vw!important;
		height: 2vw!important;
	}
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
		height: 8vw;
		position: absolute;
		right: 5vw;
		top: -5.8vw;
	}
		

		#header nav {
			position: absolute;
			top: 2.3vw;
			height: 5vw;
			line-height: 3vw;
			width:50%;
			background: rgba(0, 0, 0, 0.7);
			display:inline-flex;
			border:1px solid black;
			
		}

			#header nav ul {
				margin: 0;
				text-align:end;
				padding-right:3vw;
				margin-left:auto;
			}

				#header nav ul li {
					display: inline-block;
					font-size: 1.6vw;
					font-family: fira sans extra condensed;
					font-weight: bold;
				}
				#header nav ul li:hover
				{
					color:burlywood;
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

		@media screen and (max-width: 1024px)
		{
			
			
			#menu_vertical_bouton
			{
				font-size:3vw;
			}
			.navbar-toggler-icon {
				
				height:4vw!important;
				width:4vw!important;
			}
			
			
			#header nav {
				width:100%;
				top:0;
				height:9vw;
			}
			#header
			{
				top:0;
			}
			#header img
			{
				top:11vw;
				height:10vw;
			}
			#header nav ul
			{
				text-align:center;
				padding-right:10vw;
				margin-right:auto;
			}
			#header nav ul li
			{
				font-size:3vw;
			}
			
			#menu_vertical{
				left:0;
				max-width:45%;
			}
			
			#menu_vertical ul li
			{
				font-size:3vw;
			}
		}

				
				

					
</style>




<header id="header">
				<nav>
				<button id="menu_vertical_bouton" ><?php echo ucwords(str_replace('_',' ',$bouton)); ?></button>
					<ul>
						<li><a href="index.html">Accueil</a></li>
						<li><a href="<?php echo $menu1;?>.php"><?php echo ucfirst($menu1);?></a></li>
						<li><a href="<?php echo $menu2;?>.php"><?php echo ucfirst($menu2);?></a></li>
						<li><a href="<?php echo $menu3;?>.php"><?php echo ucfirst($menu3);?></a></li>
					</ul>
				</nav>
				<img src="img/logo.png">
				
			</header>
			 
					<nav class="vertical" id="menu_vertical">
						<ul>
							<li><a href="<?php echo $menu4;?>.php"><?php echo ucwords(str_replace('_',' ',$menu4));?></a></li>
							<li><a href="<?php echo $menu5;?>.php"><?php echo ucwords(str_replace('_',' ',$menu5));?></a></li>
							<li><a href="<?php echo $menu6;?>.php"><?php echo ucwords(str_replace('_',' ',$menu6));?></a></li>
						</ul>
					</nav>
				