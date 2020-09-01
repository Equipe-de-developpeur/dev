<?php

$host = 'localhost';
$loginsql = 'root';
$passsql = '';
$dbname = 'gites_hebergement';
                //  Ouverture de la base de donnée 
                try {
                    // On se connecte à MySQL
                    $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $dbname .';charset=utf8', $loginsql, $passsql);
                } catch (Exception $e) {
                    // En cas d'erreur, on affiche un message et on arrête tout
                    die('Erreur : ' . $e->getMessage());
                }

                // Si tout va bien, on peut continuer
                ?>