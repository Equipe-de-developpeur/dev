<!-- Connexion à la base de donnée -->

<?php include "DA_mer_plage_liste_bdd.php";?>

<!--Listes Plage-->

<section id="ListesPlage">

  <!--Titre-->

  <div class="TitreListesPlage">
    <H2>LISTES DES PLAGES</H2>
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
        <optgroup label="Ports">
          <option value="Oursinières">Oursinières</option>
          <option value="Issambres">Issambres</option>
          <option value="Brusc">Brusc</option>
        </optgroup>
        <optgroup label="Iles">
          <option value="Notre-Dame">Notre-Dame</option>
          <option value="d’Argent">d’Argent</option>
          <option value="Noire du Langoustier">Noire du Langoustier</option>
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
        <optgroup label="Ports">
          <option value="Fréjus">Fréjus</option>
          <option value="Saint Raphael">Saint Raphael</option>
          <option value="Agay">Agay</option>
        </optgroup>
        <optgroup label="Iles">
          <option value="Port-cros">Port-Cros</option>
          <option value="Porquerolles">Porquerolles</option>
          <option value="Ile du Levant">île du Levant</option>
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

$req = $connexion->query("SELECT * FROM liste_plage WHERE 1");



 /*Résultat(tableau)*/

  echo ('<div class="TableauListesPlage"><table><thead><tr>');

  //execution de cette requette dans une boucle pour récupérer chaque ligne 

  echo ('
  <th>Plages</th>
  <th>Villes</th>
  <th>Liens</th>
  <th>Distances</th>
  <th>Actions</th>
  <th>Note Moyenne</th>
  <th>Votre Avis</th>
</tr>
</thead>
<tbody>');

while ($donnees = $req->fetch())

{
// Enregistrement des données sous forme de variables
$liste_plage_id = $donnees['liste_plage_id'];
$lieux = $donnees['lieux'];
$villes = $donnees['villes'];
$liens = $donnees['liens'];
$distances = $donnees['distances'];
$actions = $donnees['actions'];
$note_moyenne = $donnees['note_moyenne'];
$votre_avis = $donnees['votre_avis'];



      echo('
        <tr>
          <td>'.$lieux.'</td>
          <td>'.$villes.'</td>
          <td><a href="'.$liens.'" target="_blank" rel="noopener noreferrer">Cliquer</a></td>
          <td>'.$distances.'</td>
          <td>'.$actions.'</td>
          <td class="Moyenne">
            <img src="'.$note_moyenne.'" alt="Dauphin Bleu">
            <img src="'.$note_moyenne.'" alt="Dauphin Bleu">
            <img src="'.$note_moyenne.'" alt="Dauphin Bleu">
          </td>
          <td class="Avis">
            <img src="'.$votre_avis.'" alt="Dauphin Gris">
            <img src="'.$votre_avis.'" alt="Dauphin Gris">
            <img src="'.$votre_avis.'" alt="Dauphin Gris">
          </td>');
echo('</tr>');
          //Fermeture du tableau
}

echo('</tbody></table></div></section>');
        

//Termine le traitement de la requête 
$req = null;

?>