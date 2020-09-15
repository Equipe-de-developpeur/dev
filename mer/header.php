<?php
include "connect_pdo.php";
include "menu_co.php";
?>

<?php $url = basename($_SERVER['PHP_SELF']) ;
if((stristr($url, 'terre') && !stristr($url, 'montagne')) || stristr($url, 'nature') || stristr($url, 'terroir') || stristr($url, 'urbanisme'))
{
	if(stristr($url, 'nature'))
	{
		$bouton="nature";
		$menu4="terre";
		$menu5="terroir";
		$menu6="urbanisme";
	}
	else if(stristr($url, 'terroir'))
	{
		$bouton="terroir";
		$menu4="terre";
		$menu5="nature";
		$menu6="urbanisme";
	}
	else if(stristr($url, 'urbanisme'))
	{
		$bouton="urbanisme";
		$menu4="terre";
		$menu5="nature";
		$menu6="terroir";
	}
	else
	{
		$bouton="terre";
		$menu4="nature";
		$menu5="terroir";
		$menu6="urbanisme";
	}
	
	
	$menu1="mer";
	$menu2="hébergement";
	$menu3="activités";
	
	include"menu.php";
}
else if((stristr($url, 'mer') && !stristr($url, 'lac')) || stristr($url, 'plage') || stristr($url, 'port') || stristr($url, 'ile') || (stristr($url, 'description') || (stristr($url, 'liste_membres'))))
{
	if(stristr($url, 'plage') && !stristr($url, 'mer'))
	{
		$bouton="plage";
		$menu4="mer";
		$menu5="port";
		$menu6="ile";
		$menu5_="liste_port/MJ_mer_listeport.php";
		include "header_mer.php";
	}
	else if(stristr($url, 'port') && !stristr($url, 'mer'))
	{
		$bouton="port";
		$menu4="mer";
		$menu5="plage";
		$menu6="ile";
		$menu5_="Plage_liste/DA_mer_plage_liste.php";
		include "header_mer.php";
	}
	else if(stristr($url, 'ile'))
	{
		$bouton="ile";
		$menu4="mer";
		$menu5="plage";
		$menu6="port";
		$menu5_="Plage_liste/DA_mer_plage_liste.php";
		$menu6_="liste_port/MJ_mer_listeport.php";
		include "header_mer.php";
	}
	else if(stristr($url, 'description'))
	{
		$bouton="ile";
		$menu4="mer";
		$menu5="plage";
		$menu6="port";
		$menu7="ile";
		$menu5_="Plage_liste/DA_mer_plage_liste.php";
		$menu6_="liste_port/MJ_mer_listeport.php";
		include "header_mer.php";
	}
	else if(stristr($url, 'liste_membres'))
	{
		$bouton="Admin";
		$menu4="mer";
		$menu5="plage";
		$menu6="port";
		$menu7="ile";
		$menu5_="Plage_liste/DA_mer_plage_liste.php";
		$menu6_="liste_port/MJ_mer_listeport.php";
		include "header_mer.php";
	}
	else
	{
		$bouton="mer";
		$menu4="plage";
		$menu5="port";
		$menu6="ile";
		$menu4_="Plage_liste/DA_mer_plage_liste.php";
		$menu5_="liste_port/MJ_mer_listeport.php";
	}
	
	
	$menu1="terre";
	$menu2="hébergement";
	$menu3="activités";
	
	include"menu.php";
}
else if(stristr($url, 'hébergement') || stristr($url, 'gite') || stristr($url, 'camping') || stristr($url, 'insolite'))
{
	
	if(stristr($url, 'gite'))
	{
		$bouton="gite";
		$menu4="hebergement";
		$menu5="camping";
		$menu6="insolite";
	}
	else if(stristr($url, 'camping'))
	{
		$bouton="camping";
		$menu4="hebergement";
		$menu5="gite";
		$menu6="insolite";
	}
	else if(stristr($url, 'insolite'))
	{
		$bouton="insolite";
		$menu4="hebergement";
		$menu5="gite";
		$menu6="camping";
	}
	else
	{
		$bouton="hebergement";
		$menu4="gite";
		$menu5="camping";
		$menu6="insolite";
	}
	$menu1="terre";
	$menu2="mer";
	$menu3="activités";
	include"menu.php";
}
else if(stristr($url, 'activités') || stristr($url, 'montagne') || stristr($url, 'lac') || stristr($url, 'airs'))
{
	if(stristr($url, 'montagne'))
	{
		$bouton="sur_terre_et_montagne";
		$menu4="activités";
		$menu5="en_mer_et_lac";
		$menu6="dans_les_airs";
	}
	else if(stristr($url, 'lac'))
	{
		$bouton="en_mer_et_lac";
		$menu4="activités";
		$menu5="sur_terre_et_montagne";
		$menu6="dans_les_airs";
	}
	else if(stristr($url, 'airs'))
	{
		$bouton="dans_les_airs";
		$menu4="activités";
		$menu5="en_mer_et_lac";
		$menu6="sur_terre_et_montagne";
	}
	else
	{
		$bouton="activités";
		$menu4="en_mer_et_lac";
		$menu5="sur_terre_et_montagne";
		$menu6="dans_les_airs";
	}
	$menu1="terre";
	$menu2="mer";
	$menu3="hébergement";
	include"menu.php";
}

?>