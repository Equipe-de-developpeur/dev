<!-- Connexion à la base de donnée -->

<?php include "DA_mer_plage_liste_bdd.php";?>

<!--Listes Plage-->

<section id="ListesPlage">

  <!--Titre-->

  <div class="TitreListesPlage">
    <H2>LISTE DES PLAGES</H2>
  </div>

  <!--Recherche-->

  <div class="RechercheListesPlage">

    <form method="post" action="header.php">

      <!--input lieux-->

      <select id="lieux" name="lieux">
        <option value="lieux">Lieux</option>
        <optgroup label="Plages">
          <option value="Saint-Clair">Saint-Clair</option>
          <option value="l'Escalet">l'Escalet</option>
          <option value="la Verne">la Verne</option>
        </optgroup>
      </select>

      <!--input villes-->

      <select id="villes" name="villes">
        <option value="villes">Villes</option>
        <optgroup label="Plages">
          <option value="Fréjus">Fréjus</option>
          <option value="Saint Raphael">Saint Raphael</option>
          <option value="Agay">Agay</option>
        </optgroup>
      </select>

      <!--input départ-->

      <div class="champ">
        <input type="text" id="départ" name="départ" maxlength="30" placeholder="Ville ou lieu de départ" autocomplete="">
      </div>

      <!--input distance-->

      <div class="champ">
        <input type="text" id="distance" name="distance" maxlength="5" placeholder="max km" autocomplete="">
      </div>

      <!--input action-->

      <div class="champ">
        <input type="text" id="action" name="action" maxlength="30" placeholder="Actions" autocomplete="">
      </div>

      <!--input note-->

      <div class="champ">
        <input type="text" id="note" name="note" maxlength="30" placeholder="Note" autocomplete="">
      </div>

      <!--Bonton RECHERCHE-->

      <div class="ChampRechercheListesPlage">
        <input type="submit" value="RECHERCHE">
      </div>

    </form>
  </div>

<?php

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
          <td><a href="../Plage_liste/DA_mer_plage_liste_details.php?id='.$liste_plage_id.'" rel="noopener noreferrer" style="color:#3795E2;">Détails</a></td>
');
echo('</tr>');
          //Fermeture du tableau
}

echo('</tbody></table></div></section>');
        

//Termine le traitement de la requête 
$req = null;

?>