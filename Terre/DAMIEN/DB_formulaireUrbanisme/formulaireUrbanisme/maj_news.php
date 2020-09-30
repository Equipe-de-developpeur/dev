<?php
include("config_bdd.php");
?> 

<?php
    $id_maj = $_GET['id'];
    // requête de récupération de la ligne de la table correspondante à l'id
    $req = $connexion->query("SELECT * FROM notation_ville WHERE id_notation = '$id_maj'");
    //execution de cette requete dans une boucle pour récupérer chaque ligne
    while($donnees = $req->fetch()){
        //enregistrement des données sous forme de variables
        $id_notation    = $donnees['id_notation'];
        $ville      = $donnees['ville'];
        $dechets     = $donnees['dechets'];
        $pesticides    = $donnees['pesticides'];
        $fleurs      = $donnees['fleurs'];
        $code_postal     = $donnees['code_postal'];
    }

    ?>

<form id="form1" name="form1" method="post" action="maj_news_traitement.php">
    <p>
        <label for="id_notation">Identifiant de la note :</label>
        <input type="text" name="id_notation" id="id_notation" readonly value="<?php echo $id_notation; ?>"/>
    </p>   
    <p>
        <label for="ville">Modifier la ville :</label>
        <input type="text" name="ville" id="ville" value="<?php echo $ville; ?>"/>
    </p>
    <p>
        <label for="dechets">Modifier la note du traitement des déchets :</label>
        <input type="text" name="dechets" id="dechets" value="<?php echo $dechets; ?>" />
    </p>
    <p>
        <label for="pesticides">Modifier la note de l'utilisation des pesticides :</label>
        <input type="text" name="pesticides" id="pesticides" value="<?php echo $pesticides; ?>" />
    </p>
    <p>
        <label for="fleurs">Modifier la note des villages fleuris :</label>
        <input type="text" name="fleurs" id="fleurs" value="<?php echo $fleurs; ?>" />
    </p>
    <p>
        <label for="code_postal">Modifier le code postal :</label>
        <input type="text" name="code_postal" id="code_postal" value="<?php echo $code_postal; ?>" />
    </p>
    <p>
        <label for="id_maj"></label>
        <input type="submit" name="id_maj" id="id_maj" value="Mettre à jour" />
    </p>
</form>


