
<form action="insert_traitement_gite.php" method="post">
             <label for="name">Nom du Gîte</label>
             <input type="text" name="nom">
             <label for="Localisation">Localisation du gîte</label>
             <input type="text"name="localisation">
             <label for="note">Note/5</label>
             <input type="number" name="note" min="1" max="5">
             <button type="submit" name="save">Enregistrez vos données</button>
         </form>