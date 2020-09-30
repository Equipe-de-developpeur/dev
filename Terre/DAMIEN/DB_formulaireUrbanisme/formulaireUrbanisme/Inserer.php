<?php
include("config_bdd.php");
?> 
<div id="contenu">
    <form id="form1" name="form1" action="inserer_traitement.php" method="POST">
        <p>
            <label for="ville">Nom de la ville :</label>
            <input type="text" name="ville" id="ville" maxlength="25" required>
        </p>
        <p>
            <label for="dechets">Traitement des déchets de 1 à 5</label>
            <input type="number" id="dechets" name="dechets" max="5" min="0" required/>
        </p>
        <p>
            <label for="pesticides">Utilisation des pesticides de 1 à 5</label>
            <input type="number" id="pesticides" name="pesticides" max="5" min="0" required/>
        </p>
        <p>
            <label for="fleurs">Village fleuri de 1 à 5</label>
            <input type="number" id="fleurs" name="fleurs" max="5" min="0" required/>
        </p>
        <p>
            <label for="code_postal">Entrez le code postal:</label>
            <input type="number" name="code_postal" id="code_postal" max="99999" min="01000" required>
        </p>
        <p>
            <label for="envoyer"></label>
            <input type="submit"value="Envoyer">     
        </p>
    </form>
</div>