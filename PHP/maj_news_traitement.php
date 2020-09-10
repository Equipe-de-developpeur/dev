<?php 
include "connexion_bdd.php";
$id = $_REQUEST['id'];
$nom_espece_upd = $_REQUEST['nom_espece'];
$nom_latin_upd = $_REQUEST['nom_latin'];
$lieu_upd = $_REQUEST['lieu'];
$date_upd = $_REQUEST['dat'];

$req = $connexion->prepare('UPDATE nature SET nom_espece = :nom_espece, 
        nom_latin = :nom_latin,lieu = :lieu, 
        dat = :dat WHERE id = :id ');
        if ($req->execute(array(
            'nom_espece' => $nom_espece_upd,
            'nom_latin' => $nom_latin_upd,
            'lieu' => $lieu_upd,
            'dat' => $date_upd,
            'id'  => $id
        ))) {
            echo "<strong>La plante à bien été mise à jour</strong><br/><br/>Nom de la plante : 
            <strong>$nom_espece_upd<strong><br> Description : <strong><br>$nom_latin_upd<strong>
            <br>$lieu_upd<strong><br>$date_upd<strong><br><br>";
            echo "<a href=index.php>Retour à la liste de plante protégées</a>";
        }   else {
            echo "Problème d'enregistrement : <br/>";
            print_r($req->errorInfo());
        }
?>