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

<form id="form1" name="form1" method="post" action="maj_news_traitement.php">
    <p>
        <label for="id_news">Identifiant de la plante : </label>
        <input type="text" name="id" class="form2" readonly value="<?php echo $id; ?>"/>
    </p>
    <p>
        <label for="nomespece">Nom de la plante : </label>
        <input type="text" name="nom_espece" class="form2" value="<?php echo $nom_espece; ?>"/>
    </p>
    <p>
        <label for="nomlatin">Nom latin de la plante : </label>
        <input type="text" name="nom_latin" class="form2" value="<?php echo $nom_latin; ?>"/>
    </p>
    <p>
        <label for="lieu">Lieu de la plante : </label>
        <input type="text" name="lieu" class="form2" value="<?php echo $lieu; ?>"/>
    </p>
    <p>
        <label for="date">Date de la plante : </label>
        <input type="date" name="dat" class="form2" value="<?php echo $dat; ?>"/>
    </p>
    <p>
        <label for="envoyer"></label>
        <input type="submit" name="envoyer" class="form2" value="Mettre à jour"/>
    </p>
</form>