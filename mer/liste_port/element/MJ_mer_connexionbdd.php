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
}

//Affichage de l'erreur pdo
catch (PDOException $e) {
    echo "Erreur !: " . $e->getMessage() . "<br>";
}

?>