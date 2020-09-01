<?php

//Identifiant de connexion, à changer selon le serveur
$host = "localhost";
$user = "root";
$password = "root";
$dbname = "var_nature";

try {
    //Première tentative de connexion au serveur
    $pdo = new PDO("mysql:host=$host;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Création de la base de donnée si non existante
    $bdd = "CREATE DATABASE IF NOT EXISTS $dbname CHARACTER SET utf8";
    $pdo->exec($bdd);
    //Deuxième connexion au serveur et connexion à la base de donnée
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Création de la table JM_mer_liste_port si non existante
    $table = "CREATE TABLE IF NOT EXISTS JM_mer_liste_port (
        lieu_id INT PRIMARY KEY AUTO_INCREMENT,
        lieu VARCHAR(100) UNIQUE NOT NULL,
        lien VARCHAR(255),
        label_pp TINYINT(2) NOT NULL,
        label_aeb TINYINT(2) NOT NULL,
        label_pb TINYINT(1) NOT NULL,
        localisation VARCHAR(100) NOT NULL,
        carte VARCHAR(255) NOT NULL
    )";
    /*
    lieu -> nom du port
    lien -> lien vers le site du port
    label_pp -> certificat port propre ; 0 = Non, 1 = Engagé, 2 = Certifié
    label_aeb -> certificat actifs en biodiversité ; 0 = Non, 1 = Engagé, 2 = Certifié
    label_pb -> certificat port propres ; 0 = Non, 1 = Oui
    localisation -> nom de la ville où est situé le port
    carte -> lien vers une carte en ligne indiquant le lieu
    */
    $pdo->exec($table);
    //Insertion des données
    include_once "MJ_mer_insertionbdd.php";
}

//Affichage de l'erreur pdo
catch (PDOException $e) {
    echo "Erreur !: " . $e->getMessage() . "<br>";
}

?>