<!-- reçois les informations de la page inserer.php et réaliser le traitement d’enregistrement dans la base de données -->

<?php
include("DA_mer_plage_liste_bdd.php");

// Récupération des données du formulaire
$NewCommentaires = $_POST['NewCommentaires'];


/* vérification de la bonne reception des champs
echo $NewCommentaires;
exit();*/


// procédure d'enregistrement de la news dans la table

$req = $connexion->prepare("INSERT INTO commentaires_plage (textes) VALUES(:textes)");

if ($req->execute(array(
  'NewCommentaires' => $NewCommentaires,
  )) )
{
echo "Le commentaire à bien été enregistrée<br/><br/>Commentaires : $NewCommentaires";

}
else
{
echo "Problème d'enregistrement : <br/>";
// prise en charge des messages d"erreurs
print_r($req->errorInfo());
}


	
?>
