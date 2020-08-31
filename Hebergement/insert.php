<?php 
//  Ouverture de la base de donnée 
try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=gites_hebergement;charset=utf8', 'root', '');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

// Si tout va bien, on peut continuer

$nom = $_POST['nom'];
$localisation = $_POST['localisation'];
$note = $_POST['note'];



$sql  = "INSERT INTO gites (nom, localisation, note) 
            VALUES ('".$_POST["nom"]."','".$_POST["localisation"]."','".$_POST["note"]."')";
            $query = $db->prepare($sql);

        
?>