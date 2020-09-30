<?php
    include "config_bdd.php";

    //recuperation des données du formulaire
    $ville = $_POST['ville'];
    $dechets = $_POST['dechets'];
    $pesticides = $_POST['pesticides'];
    $fleurs = $_POST['fleurs'];
    $code_postal = $_POST['code_postal'];

    // verification de la bonne reception des champs
//    echo $fleurs;
    
//    exit();

    //procédure d'enregistrement de la news dans la table
    $req = $connexion->prepare("INSERT INTO notation_ville (ville,dechets,pesticides,fleurs,code_postal)
                                 VALUES (:ville, :dechets, :pesticides, :fleurs, :code_postal)");
    // $req = $connexion->prepare("INSERT INTO notation_ville (dechets, pesticides, fleurs)
    //                             VALUES (:dechets, pesticides, :fleurs");
    if ($req->execute(array(
        'ville' => $ville,
        'dechets' => $dechets,
        'pesticides' => $pesticides,
        'fleurs' => $fleurs,
        'code_postal' => $code_postal,
    ))){
        echo '
        <div class="alert alert-success" role="alert">
            La note a bien été enregistré<br>
        </div>
        Voici un récapitulatif de votre notation : <br> 
        Titre : <strong>' . $ville .'</strong><br>
        Contenu: 
        <strong>' . $dechets . '  </strong><br>
        <strong>' . $pesticides . ' </strong><br>
        <strong>' . $fleurs . '     </strong><br>
        <strong>' . $code_postal . '</strong><br>';
        echo '<a href="index.php" class="btn btn-primary" role="button">Retour à la liste des villes</a>';
    }else{
        echo '
        <div class="alert alert-danger" role="alert">
            Problème d\'enregistrement : <br/>
        </div>';
        //prise en charge des messages d'erreurs
        print_r($req->errorInfo());
    }


?>