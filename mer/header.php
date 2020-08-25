<?php $url = $_SERVER['PHP_SELF'] ;
if(stristr($url, 'terre'))
{
	$menu1="mer";
	$menu2="hebergement";
	$menu3="activite";
	include"menu.php";
}
else if(stristr($url, 'mer'))
{
	$menu1="terre";
	$menu2="hebergement";
	$menu3="activite";
	include"menu.php";
}
else if(stristr($url, 'hebergement'))
{
	$menu1="terre";
	$menu2="mer";
	$menu3="activite";
	include"menu.php";
}
else if(stristr($url, 'activite'))
{
	$menu1="terre";
	$menu2="mer";
	$menu3="hebergement";
	include"menu.php";
}

?>