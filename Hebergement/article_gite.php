<?php
include 'header_hebergement.php';
include 'config_bdd_gite.php';
$id_gite = $_GET['id'];

$req = $bdd->query("SELECT * FROM gites WHERE id = $id_gite");
while ($donnees = $req->fetch()) {
  $nom = $donnees['nom'];
  $localisation = $donnees['localisation'];
  $id_gite = $donnees['id'];
  $note_moyenne = $donnees['note_moyenne'];
  $description = $donnees['description'];
}
?>
<a class="return_gite" href="gite.php">Retour à la liste des gites</a>
<div class="article article_1 container">
  <h1><?php echo $nom ?></h1>
  <p><?php $feuille = '<img src="img/mini_leaf.png" alt="Mini logo feuille">';
      //  BOUCLE PERMETTANT D'AFFICHER UNE PETITE FEUILLE POUR CHAQUE INDENTATION DE NOTE
      for ($i = 1; $i <= $note_moyenne; $i++) {
        echo $feuille;
      }
      ?></p>
      <span>Localisation: <strong><?php echo $localisation ?></strong> </span>
  <p><?php echo $description ?></p>

</div>
<div class="article article_1 container">
  <?php
  if(isset($_SESSION['auth'])){
    $id_user = $_SESSION['auth']['id'];
  }
  

  include 'add_comment_gite.php' ?>

  <?php
  $req = $bdd->query("SELECT * FROM gites INNER JOIN comments ON gites.id = comments.id_gite
                                          INNER JOIN users ON users.id = comments.id_user");
  while ($donnees = $req->fetch()) {
    $comment = $donnees['comments'];
    $comment_user = $donnees['username'];
    $date = $donnees['date_comment']; 
    $gite_id = $donnees['id_gite'];
    
    if($id_gite == $gite_id):

    
    ?>

    <div class="container section_comments">
    
    <div class="infos_comments">
    <span ><strong>Utilisateur :</strong> <?php echo $comment_user ?></span>
    <span > <strong>Date de publication :</strong> <?php echo $date ?></span>
    </div>
    <p><?php echo $comment ?></p>
    </div>


  <?php
  endif;
  }
  ?>

</div>






  <?php include 'footer.php' ?>