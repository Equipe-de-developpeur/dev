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
		<link rel="stylesheet" href="css/menu.css" />
		<link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed&amp;display=swap" rel="stylesheet">
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
				