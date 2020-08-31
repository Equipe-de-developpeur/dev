<!--Listes Mer-->

<section id="ListesMer">

  <!--Titre-->

  <div class="TitreListesMer">
    <H2>LISTES DES PLAGES / PORTS / ILES ECO RESPONSABLE</H2>
  </div>

  <!--Recherche-->

  <div class="RechercheListesMer">

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

      <div class="ChampRechercheListesMer">
        <input type="submit" value="RECHERCHE">
      </div>

    </form>
  </div>

  <!--Résultat(tableau)-->

  <div class="TableauListesMer">

    <table>
      <thead>
        <tr>
          <th>Lieux</th>
          <th>Villes</th>
          <th>Liens</th>
          <th>Distances</th>
          <th>Actions</th>
          <th>Note Moyenne</th>
          <th>Votre Avis</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Base Nature</td>
          <td>Fréjus</td>
          <td><a href="http://" target="_blank" rel="noopener noreferrer">Cliquer</a></td>
          <td>27 km</td>
          <td>
            <ul>
              <li>Action n°1</li>
              <li>Action n°2</li>
            </ul>
          </td>
          <td class="Moyenne">
            <img src="img/DauphinBleu.png" alt="Dauphin Bleu;">
            <img src="img/DauphinBleu.png" alt="Dauphin Bleu;">
            <img src="img/DauphinBleu.png" alt="Dauphin Bleu">
          </td>
          <td class="Avis">
            <img src="img/DauphinBleu.png" alt="Dauphin Bleu;">
            <img src="img/DauphinBleu.png" alt="Dauphin Bleu;">
            <img src="img/DauphinGris.png" alt="Dauphin Gris">
          </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>



  </div>
</section>