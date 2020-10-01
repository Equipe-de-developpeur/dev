<?php
include("../MODEL/DA_mer_plage_liste_MODEL.php");

// Récupération des données du formulaire
$NewCommentaires = htmlspecialchars($_POST['NewCommentaires']);
$commentaires_plage_noms = htmlspecialchars($_POST['nom']);
$commentaires_plage_lieux = htmlspecialchars($_POST['lieu']);
$commentaires_plage_id_parent = $_POST['commentaires_plage_id_parent'];

/*vérification de la bonne reception des champs
echo $NewCommentaires;
exit();*/


// procédure d'enregistrement dans la table

$bdd = new DA_mer_plage_liste_bdd_MODEL;
$connexion = $bdd->connexionbdd();
$req2 = $connexion->prepare("INSERT INTO da_commentaires_plage (commentaires_plage_textes, commentaires_plage_noms, commentaires_plage_lieux, commentaires_plage_id_parent) VALUES(:NewCommentaires, :commentaire_plage_noms, :commentaire_plage_lieux, :commentaires_plage_id_parent)");

if ($req2->execute(array(
  'NewCommentaires' => $NewCommentaires,
  'commentaire_plage_noms' => $commentaires_plage_noms,
  'commentaire_plage_lieux' => $commentaires_plage_lieux,
  'commentaires_plage_id_parent' => $commentaires_plage_id_parent,
))) {
  $id_comm = $connexion->lastInsertId('da_commentaires_plage');
  header('Location: ../DA_mer_plage_liste.php#' . $id_comm);
} else {
  echo "Problème d'enregistrement : <br/>";
  // prise en charge des messages d"erreurs
  print_r($req2->errorInfo());
}