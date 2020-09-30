<?php
include("config_bdd.php");

// Récupération des données du formulaire


$id_notation        = $_POST['id_notation'];
$ville_upd          = $_POST['ville'];
$dechets_upd        = $_POST['dechets'];
$pesticides_upd        = $_POST['pesticides'];
$fleurs_upd          = $_POST['fleurs'];
$code_postal_upd        = $_POST['code_postal'];

?> 

<?php
    //procédure de mise à jour de la news
    $req = $connexion->prepare('UPDATE notation_ville   
                                SET ville       = :ville, 
                                    dechets     = :dechets, 
                                    pesticides  = :pesticides, 
                                    fleurs      = :fleurs,
                                    code_postal = :code_postal
                                WHERE id_notation = :id_notation');

    if($req->execute(array(

        'ville'         => $ville_upd,
        'dechets'       => $dechets_upd,
        'pesticides'    => $pesticides_upd,
        'fleurs'        => $fleurs_upd,
        'code_postal'   => $code_postal_upd,
        'id_notation'   => $id_notation
    ))){
        echo "La note a bien été mise à jour <br/><br/>Titre : $ville_upd - $dechets_upd - $pesticides_upd - $fleurs_upd - $code_postal_upd  <br/><br/>";
        echo "<a href=index.php>Retour à la liste des news</a>";
    }else {
        echo "Problème d'enregistrement : <br/>";
        // prise en charge des messages d'erreurs
        print_r($req->errorInfo());
    }
?>
