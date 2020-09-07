<?php

//construction des variables de connexion serveur MySql
$connexion=new PDO('mysql:host=localhost','root','');

$host='localhost';
$dbname='camping';
$identifiant='root';
$password='';

try{
    $connexion= new PDO("mysql:host=$host; dbname=$dbname", $identifiant, $password);
}
catch(PDOexception $erreur){
    die("imposible de se connecter $dbbase" .$erreur->getMessage());
}
//ok
?>