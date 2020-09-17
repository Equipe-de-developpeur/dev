<?php 
    include 'header_hebergement.php';
    include 'config_bdd_gite.php';
    $id_gite = $_GET['id'];

    $req = $bdd->query("SELECT * FROM gites WHERE id = $id_gite");
    while($donnees = $req->fetch()){
                    $nom = $donnees['nom'];
                    $localisation = $donnees['localisation'];
                    $id_gite = $donnees['id'];
                    $note_moyenne = $donnees['note_moyenne'];
                    $description = $donnees['description'];
                        }
?>
  <a class="return_gite"href="gite.php">Retour à la liste des gites</a>
<div class="article article_1 container">
            <h1><?php echo $nom ?></h1>  
            <p><?php $feuille = '<img src="img/mini_leaf.png" alt="Mini logo feuille">';
                                            //  BOUCLE PERMETTANT D'AFFICHER UNE PETITE FEUILLE POUR CHAQUE INDENTATION DE NOTE
                                            for ($i = 1; $i <= $note_moyenne; $i++) {
                                                echo $feuille;
                                            }
                                             ?></p>
            <p><?php echo $description ?></p>  

</div>

<?php include 'footer.php' ?>