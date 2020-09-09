<?php
$serveur = 'localhost';
$logsql = 'root';
$mdpsql = '';
$bdd = 'formation';

try {
    $connexion = new PDO('mysql:host=' . $serveur . ';dbname=' . $bdd . ';charset=utf8', $logsql, $mdpsql);
}

catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>