<?php include 'config_bdd_camping.php'; 

$id_maj=$_POST['id_camping'];

$req= $connexion->query("SELECT*FROM hebergement WHERE id_camping='$id_maj'");
while ($donnees =$req->fetch())
{
   
    $nom =$donnees['nom'];
    $ville =$donnees['ville'];
    $code_postal = $donnees['code_postal'];
    $telephone = $donnees['telephone'];
    $note=$donnees['note'];

    ?>


<form id="form1" name="form1" method="post" action="maj_news_camping_traitement.php">
<p>
<label for="titre">identifiant : hébergement</label>
<input type ="text" name="id_hebergement" id="id_hebergement" readonly value="<?php echo $id_maj ?>"/>
</p>
<p>
    <label for="titre">Nom de Camping</label>
    <input type="text" name="nom" id="camping" value="<?php echo $nom ?>"/>
</p>
<p>
<label for="titre">Ville</label>
<input type ="text" name="ville" id="ville"  value="<?php echo $ville; ?>"/>
</p>

<p>
<label for="titre">code_postal</label>
<input type ="text" name="code_postal" id="code_postal"  value="<?php echo $code_postal; ?>"/>
</p>

<p>
<label for="titre">Télephone</label>
<input type ="text" name="telephone" id="telephone"  value="<?php echo $telephone; ?>"/>
</p>

<p>
<label for="titre">note</label>
<input type ="text" name="note" id="note"  value="<?php echo $note ?>"/>
</p>



<input type="submit" value="Envoyer les modifs">

</form>

<?php } ?>