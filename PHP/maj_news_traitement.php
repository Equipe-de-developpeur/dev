<style>
<?php 
include "entry.css"; 
?>
</style>
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
            echo "
            <div class='resultat'>
            <h1 id='titreh10'>La plante à bien été mise à jour</h1><br><br>
            <strong><p>Nom de la plante : $nom_espece_upd</p><strong><br> 
            <strong><p>Nom latin : $nom_latin_upd</p><strong><br>
            <strong><p>Lieu de la plante : $lieu_upd</p><strong><br>
            <strong><p>Date de la plante : $date_upd</p><strong><br><br>";
            echo "
            <p class='newlink'>
            <a href='form.php'>Retour à la liste de plante protégées</a>
            </p>";
        }   else {
            echo "Problème d'enregistrement : <br/>";
            print_r($req->errorInfo());
        }
?>