<?php 
    include 'config_bdd_gite.php';

    // Récupération des données du formulaire

    $id_supp = $_POST['supp_gite'];
    $req = $bdd ->prepare("DELETE FROM gites WHERE id ='$id_supp'");

    if($req->execute()){
        header("location:gite.php");
    }else{
        echo 'Un problème est survenu';
        print_r($req->errorInfo());
    }
    // Apres la suppression retour automatique à la liste des news

    
?>