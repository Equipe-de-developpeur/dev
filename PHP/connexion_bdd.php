<?php

//Identifiant de connexion, à changer selon le serveur
$serveur = "localhost";
$logsql = "root";
$mdpsql = "";
$bdd = "formation";

try {
    //Première tentative de connexion au serveur
    $connexion = new PDO('mysql:host=' . $serveur . ';dbname=' . $bdd . ';charset=utf8', $logsql, $mdpsql);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Création de la base de donnée si non existante
    $base = "CREATE DATABASE IF NOT EXISTS $bdd CHARACTER SET utf8";
    $connexion->exec($base);
    //Deuxième connexion au serveur et connexion à la base de donnée
    $connexion = new PDO("mysql:host=$serveur;dbname=$bdd;charset=utf8", $logsql, $mdpsql);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /* Création de la table `nature`*/

    $table = "CREATE TABLE IF NOT EXISTS `nature` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nom_espece` varchar(255) NOT NULL,
    `nom_latin` varchar(255) NOT NULL,
    `dat` date NOT NULL,
    `lieu` text NOT NULL,
    PRIMARY KEY (`id`)) 
    ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8";
 
        /*Déchargement des données de la table nature */
    


}
//Affichage de l'erreur pdo
catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}


?>