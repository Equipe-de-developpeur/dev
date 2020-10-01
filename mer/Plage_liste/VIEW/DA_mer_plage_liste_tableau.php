<!-- Connexion à la base de donnée -->

<?php include "MODEL/DA_mer_plage_liste_MODEL.php";?>
<?php $bdd = new DA_mer_plage_liste_bdd_MODEL;
$connexion=$bdd->creationbdd();
$connexion=$bdd->connexionbdd(); ?>
<?php include "../espace_membre/header.php"; ?>
<!--Listes Plage-->

<section id="ListesPlage">

  <!--Titre-->

  <div class="TitreListesPlage">
    <H2>LISTE DES PLAGES</H2>
  </div>



<?php

include_once "DA_mer_plage_liste_recherche.php";


$bdd2 = new DA_mer_plage_liste_MODEL;
$connexion2=$bdd2->liste();
$req = $connexion->query("SELECT * FROM da_liste_plage WHERE 1");



 /*Résultat(tableau)*/

  echo ('<div class="TableauListesPlage"><table><thead><tr>');

  //execution de cette requette dans une boucle pour récupérer chaque ligne 

  echo ('
  <th>Plages</th>
  <th>Villes</th>
  <th>Détails</th>
</tr>
</thead>
<tbody>');

while ($donnees = $req->fetch())

{
// Enregistrement des données sous forme de variables
$liste_plage_id = $donnees['liste_plage_id'];
$lieux = $donnees['liste_plage_lieux'];
$villes = $donnees['liste_plage_villes'];
$liens = $donnees['liste_plage_liens'];
$distances = $donnees['liste_plage_distances'];
$actions = $donnees['liste_plage_actions'];
$note_moyenne = $donnees['liste_plage_note_moyenne'];
$votre_avis = $donnees['liste_plage_votre_avis'];



      echo('
        <tr>
          <td>'.$lieux.'</td>
          <td>'.$villes.'</td>
          <td><a href="DA_mer_plage_liste.php?id='.$liste_plage_id.'" rel="noopener noreferrer" style="color:#3795E2;">Détails</a></td>
');
echo('</tr>');
          //Fermeture du tableau
}

echo('</tbody></table></div></section>');
        

//Termine le traitement de la requête 
$req = null;

?>