<style>
<?php 
include "entry.css"; 
?>
</style>

<?php 
include "connexion_bdd.php";


$id_maj = $_REQUEST['id'];

$req = $connexion->query("SELECT * FROM nature WHERE id=".$id_maj);
$donnees = $req->fetchall();
foreach ($donnees as $row) {
$id=$row['id'];
$nom_espece=$row['nom_espece'];
$nom_latin=$row['nom_latin'];
$lieu=$row['lieu'];
$dat=$row['dat'];
}
?>
<h1 id="titreh1">Mise à jour du contenu</h1>
<div class="formal">
<form class="formulaire" name="form1" method="post" action="maj_news_traitement.php">
        <label for="id_news">Identifiant de la plante : </label>
        <input type="text" name="id" class="form" readonly value="<?php echo $id; ?>"/>
        <label for="nomespece">Nom de la plante : </label>
        <input type="text" name="nom_espece" class="form" value="<?php echo $nom_espece; ?>"/>
        <label for="nomlatin">Nom latin de la plante : </label>
        <input type="text" name="nom_latin" class="form" value="<?php echo $nom_latin; ?>"/>
        <label for="lieu">Lieu de la plante : </label>
        <input type="text" name="lieu" class="form" value="<?php echo $lieu; ?>"/>
        <label for="date">Date de la plante : </label><br>
        <input type="date" name="dat" class="form" value="<?php echo $dat; ?>"/>
        <label for="envoyer"></label>
        <input type="submit" name="envoyer" class="bouton" value="Mettre à jour"/>
</div>
</form>