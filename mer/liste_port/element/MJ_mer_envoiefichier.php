<?php

//Si un fichier a été envoyé
if(isset($_FILES['file'])) {
    //Déclaration des types de fichiers autorisés
    $extension = array('.png', '.gif', '.jpg', '.jpeg', '.pdf', '.txt', '.odt', '.doc', '.rtf', '.bmp');
    //Prélèvement du type du fichier envoyé
    $exfile = strrchr($_FILES['file']['name'], '.');
    //Si le fichier envoyé est bien d'un des types autorisés
    if(in_array($exfile, $extension)){
        //Déclaration de la taille maximal du fichier
        $taille_max = 10000000;
        //Prélèvement de la taille du fichier envoyé
        $taille_file = filesize($_FILES['file']['tmp_name']);
        if($taille_max>$taille_file) {
            //Déclaration du dossier destinataire du fichier
            $dossier = "fichier/" . $ID ."/";
            //Création du dossier si non existant
            if(!is_dir($dossier)) {
                mkdir("$dossier");
            }
            //Récupération du nom du fichier envoyé
            $fichier = basename($_FILES['file']['name']);
            //Envoie du fichier dans le dossier destinataire
            move_uploaded_file($_FILES['file']['tmp_name'], $dossier . $fichier);
        }
        else {
            echo "Le fichier envoyé est trop lourd.";
        }
    }
    //Si le fichier envoyé a un mauvais type
    else {
        echo "Le type de fichier que vous avez envoyé n'est pas autorisé.";
    }
}

?>