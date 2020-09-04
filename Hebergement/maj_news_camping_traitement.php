<?php include 'config_bdd_camping.php';

$id_hebergement=$_POST['id_hebergement'];
$nom_recup = $_POST['nom'];
$ville=$_POST['ville'];
$code_postal=$_POST['code_postal'];
$telephone=$_POST['telephone'];
$note=$_POST['note'];

// $req= $connexion->prepare('UPDATE hebergement SET nom= :nom_recup, ville= :ville, code_postal= :code_postal, telephone= :telephone, note= :note WHERE id_camping= :id_hebergement');
$req= $connexion->prepare('UPDATE hebergement SET nom ="' .$nom_recup. '", ville ="' .$ville. '", code_postal ="' .$code_postal. '", telephone ="' .$telephone. '", note ="' .$note. '" WHERE id_camping ="' .$id_hebergement.'"');

if ($req->execute(array(
'nom' => $nom_recup,
'ville' => $ville,
'code_postal' => $code_postal,
'telephone' => $telephone,
'note' => $note,
'id-camping' => $id_hebergement,
))){
    echo "la mise à jour est faite <br>";
    echo '<a href="camping.php">Retour à la page Camping</a>';
}else
{
    echo "la mise à jour n'a pas été faite";
    

    print_r($req->errorInfo());
}

?>

