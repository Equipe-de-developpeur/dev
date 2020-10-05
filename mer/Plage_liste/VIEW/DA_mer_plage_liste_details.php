<?php
 include "../espace_membre/header.php";
include "MODEL/DA_mer_plage_liste_MODEL.php";


$id = $_REQUEST['id'];

$bdd = new DA_mer_plage_liste_bdd_MODEL;
$connexion = $bdd->connexionbdd();
$req = $connexion->query("SELECT * FROM da_liste_plage WHERE `liste_plage_id`=$id");

$plageliste = new DA_mer_plage_liste_MODEL;
if (isset($_REQUEST['VOTER'])) {
  $plageliste->notation();
?>

<!-- Idem que le header location (changement pour éviter les conflits) -->
  <script>
    location.replace("<?php echo $_SERVER['HTTP_REFERER']; ?>");
  </script>
  
  <?php
            //Rafraichir la page si il y a 1 vote existant
          }
          while ($donnees = $req->fetch()) {
            // Enregistrement des données sous forme de variables
            $liste_plage_id = $donnees['liste_plage_id'];
            $lieux = $donnees['liste_plage_lieux'];
            $villes = $donnees['liste_plage_villes'];
            $liens = $donnees['liste_plage_liens'];
            $distances = $donnees['liste_plage_distances'];
            $actions = $donnees['liste_plage_actions'];
            $note_moyenne = $donnees['liste_plage_note_moyenne'];
            $votre_avis = $donnees['liste_plage_votre_avis'];
            $nombre_de_vote = $donnees['liste_plage_nombre_de_vote'];


            echo ('
  <section class="details">

  <h2>' . $lieux . '</h2>

  <div class="ligne1">
    <div>
      <p><span>Ville :</span></p>
      <p>' . $villes . '</p>
    </div>
    <div>
      <p><span>Lien :</span></p>
      <a href="' . $liens . '" target="_blank" rel="noopener noreferrer">Ici</a>
    </div>
  </div>

  <div class="ligne2">
    <div>
      <p><span>Distance :</span></p>
      <p>' . $distances . '</p>
    </div>
    <div>
      <p><span>Actions :</span></p>
      <p>' . $actions . '</p>
    </div>
  </div>
  ');

            include 'VIEW/DA_mer_plage_liste_notation.php';

            echo ('


      </div>
    </div>
    
  </div>
  <br>
</section>

');
          }
            ?>



<a style="color:#3795E2" href="DA_mer_plage_liste.php" rel="noopener noreferrer">Retour</a>
