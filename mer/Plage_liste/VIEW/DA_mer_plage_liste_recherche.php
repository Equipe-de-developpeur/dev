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