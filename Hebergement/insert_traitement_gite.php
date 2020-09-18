<?php
include 'header_hebergement.php';
include 'config_bdd_gite.php';
// Récupération des données du formulaire
$nom = htmlspecialchars($_POST['nom']);
$localisation = htmlspecialchars($_POST['localisation']);
$description = htmlspecialchars($_POST['description']);
$description = nl2br($description);
// Si une photo est postée et si le nom n'est pas vide
if(isset($_FILES['picture']) && !empty($_FILES['picture']['name'])){
    $tailleMax = 2097152;
    $FileExtension = array('jpg', 'jpeg', 'png','gif');
    // Si la taille de la photo est inférieure a $tailleMax
    if($_FILES['picture']['size'] <= $tailleMax){
        $uploadExtension = strtolower(substr(strrchr($_FILES['picture']['name'], '.'), 1));
    }else{
        session_start();
        $_SESSION['flash']['danger'] = "Votre photo est trop volumineuse, elle ne doit pas dépasser 2Mo.";
        header('Location:gite.php');
    }
}

// verification de la reception des données
/*
echo $nom;
echo $localisation;
echo $note;
*/

// Procedure d'enregistrement des données du formulaire dans la bdd
if(!empty($nom) && !empty($localisation)){
    $req = $bdd->prepare("INSERT INTO gites (nom, localisation, description) VALUES (:nom, :localisation, :description)");

if ($req->execute(array(
    'nom' => $nom,
    'localisation' => $localisation,
    'description' => $description,
))) {
?>

    <article class="article article_1 article_insert container">
        <h2>Validation des données</h2>
        <p>
            <strong>Nom du gîte :</strong> <?php echo $nom ?><br>
            <strong>Localisation :</strong> <?php echo $localisation ?><br>
            <strong>Description : </strong> <?php echo $description?>
        <a href="gite.php"><button class="btn btn-success article_btn ">Retournez à la liste des tableaux</button></a>
    </article>



<?php




} else {
    echo 'Problème d\'enregistrement';

    // prise en charge des messages d'erreurs
    print_r($req->errorInfo());
}
}else{
    $_SESSION['flash']['danger'] = 'Veuillez renseigner au minimum le nom et la localisation de votre gite.';
    header('Location:gite.php');
}


?>