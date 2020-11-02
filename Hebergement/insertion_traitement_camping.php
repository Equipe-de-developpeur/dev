<?php include 'config_bdd_camping.php';

 
$nomcamping= $_POST ['camping'];
$localisation= $_POST ['ville'];
$code_postal= $_POST ['code_postal'];
$telephone= $_POST ['telephone'];
$note= $_POST ['note'];

$req = $connexion->prepare ("INSERT INTO hebergement (nom, ville, code_postal,telephone, note)
VALUES('$nomcamping', '$localisation', '$code_postal', '$telephone', '$note');");

if ($req->execute (array (
    'nom' => $nomcamping,
    'ville' => $localisation,
    'code_postal' => $code_postal,
    'telephone' => $telephone,
    'note' => $note,
)))
{
    echo '

    <div class="alert alert-success" role="alert">
        L ajout a bien été enregistrée <br> </div>
        Voici un recapitulatif d\'ajout : 

        <br> ville:' .$localisation.'
        <br> Code postal: '.$code_postal.'
        <br> Téléphone: '.$telephone.'
        <br> Note: '.$note.';
        <br> <br>';
    
    echo '<a href="camping.php" class="btn btn-primary" role="button">Retour à la liste </a>';
             
}
else{
    echo'
    <div class="alert alert-danger" role="alert">
    Problème d\'enregistrement : <br>
    </div>';

    //prise en charge des erreurs
    print_r($req->errorInfo());
}



echo "<a href='camping.php'> Revenir à la page précedente </a>";

?>

<?php 


?>