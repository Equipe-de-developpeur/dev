<!-- reçois les informations de la page inserer.php et réaliser le traitement d’enregistrement dans la base de données -->

<?php
include("DA_mer_plage_liste_bdd.php");

// Récupération des données du formulaire
$NewCommentaires = htmlspecialchars($_POST['NewCommentaires']);


 /*vérification de la bonne reception des champs
echo $NewCommentaires;
exit();*/


// procédure d'enregistrement de la news dans la table

$req2 = $connexion->prepare("INSERT INTO commentaires_plage (textes) VALUES(:NewCommentaires)");

if ($req2->execute(array(
  'NewCommentaires' => $NewCommentaires,
  )) )
{
  $id_comm=$connexion->lastInsertId('commentaires_plage');
echo "Le commentaire à bien été enregistrée<br/><br/>Commentaires : $NewCommentaires";
echo "<br><a href=DA_mer_plage_liste.php>Retour à la liste des plages</a>";

header('Location: DA_mer_plage_liste.php#'.$id_comm);
}
else
{
echo "Problème d'enregistrement : <br/>";
// prise en charge des messages d"erreurs
print_r($req2->errorInfo());
}


	
?>
