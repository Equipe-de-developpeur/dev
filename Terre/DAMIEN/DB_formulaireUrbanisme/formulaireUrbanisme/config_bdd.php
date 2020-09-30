<?php
// Construction des variables de connexion serveur Mysql
$serveur = "localhost";
$loginsql = "root";
$passsql = "";
$labase = "terroir";

//Connexion au serveur
try {
    

    $connexion = new PDO('mysql:host='.$serveur.';dbname='.$labase.';charset=utf8',$loginsql,$passsql);
}
//Prise en charge des erreurs de connexion.
catch (exception $e){
    die('erreur :' . $e->getMessage());
}



?>