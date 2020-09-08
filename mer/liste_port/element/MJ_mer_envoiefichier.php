<?php

if(isset($_FILES['file'])) {
    $dossier = "fichier/" . $ID ."/";
    if(!is_dir($dossier)) {
        mkdir("$dossier");
    }
    $fichier = basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $dossier . $fichier);
}

?>