<?php
include 'header_hebergement.php';
include "config_bdd_gite.php";

// Recuperation des donnes de formulaire
$id_maj = $_POST['id_maj'];
// Requette de recuperation de la ligne de la table correspondante
$req = $bdd->query("SELECT nom, localisation,description, id FROM gites WHERE id = $id_maj");
// execution de cete requette dans une bouche pour recuperer les donnees dans un tableau
while ($donnees = $req->fetch()) {
    // Enregistrement des données sous forme de variables
    $id_gite = $donnees['id'];
    $nom = $donnees['nom'];
    $localisation = $donnees['localisation'];
    $description = $donnees['description'];
    
}
?>
<article class="article article_1 container">
    <h2>Modification des données</h2>
    <form action="maj_gite_traitement.php" class="form-group" method="post">
        
                <input type="hidden" name="id_gite" id="id_gite" readonly value=<?php echo $id_maj ?> >
                
                <label for="nom"><strong>Nom du gîte</strong> </label>
                <input type="text"class="form-control" name="nom" id="nom_gite" value="<?php echo $nom ?>">

                <label for="localisation"> <strong>Localisation du gîte</strong></label>
                <input type="text"class="form-control" name="localisation" id="localisation" value="<?php echo $localisation ?>">
            
                <label for="localisation"> <strong>Description du gîte</strong></label>
                <textarea name="description"class="form-control" id="" cols="30" rows="10"><?php echo $description ?></textarea>  
            
                <button type="submit" name="envoyer" class="btn btn-primary"> Mettre à jour</button>
       

        

    </form>
</article>