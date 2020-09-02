<?php
// Se connecter a la base hebergement_insolite par instanciation de la class PDO - nouvel objet : $connexion
	$connexion = new PDO('mysql:host=localhost', 'root', '');
// Invocation de la méthode exec() de l'objet $connexion
	$connexion->exec("CREATE DATABASE IF NOT EXISTS hebergement_insolite DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");
// Se connecter a la bdd hebergement_insolite par instance de l'objet PDO - nouvel objet : $bdd -avec les 4 variables utiles pour la connexion : $host, $dbname, $username, $password 
	$host = 'localhost';
	$dbname = 'hebergement_insolite';
	$username = 'root';
	$password = '';
// Partie du code mis sous surveillance
	try{
// Se connecter a la bdd hebergement_insolite par instanciation de la classe PDO nouvel objet : $bdd
	$bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	
// Invocation de la méthode exec() de l'objet pour préciser au serveur MySql de renvoyer du ut8 pour les accents
	$bdd->exec('SET NAMES utf8');
	} catch (PDOException $erreur) { // avec la capture et la gestion des erreurs
		die("Impossible de se connecter à la base de données $dbname :" . $erreur->getMessage());
	}
//OK
?>