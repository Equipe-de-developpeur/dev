<?php

//Si un fichier a été envoyé
if(isset($_FILES['file']) && $_FILES['file']['name'] != NULL) {
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
        if($taille_max > $taille_file) {
            //Déclaration du dossier destinataire des fichiers
            $dossiermere = "fichier/";
            //Création du dossier précédent si non existant
            if (!is_dir($dossiermere)) {
                mkdir("$dossiermere");
            }
            //Déclaration du dossier destinataire ciblé par rapport à l'ID des fichiers
            $dossier = "fichier/" . $ID ."/";
            //Création du dossier précédent si non existant
            if(!is_dir($dossier)) {
                mkdir("$dossier");
            }
            //Récupération du nom du fichier envoyé
            $fichier = basename($_FILES['file']['name']);
            //Déclaration des types de caractères interdits
            $caractèreInterdit = array("À" => "A", "Á" => "A", "Â" => "A", "Ã" => "A", "Ä" => "A", "Å" => "A", "Ç" => "C", "È" => "E", "É" => "E", "Ê" => "E", "Ë" => "E", "Ì" => "I", "Í" => "I", "Î" => "I", "Ï" => "I", "Ò" => "O", "Ó" => "O", "Ô" => "O", "Õ" => "O", "Ö" => "O", "Ù" => "U", "Ú" => "U", "Û" => "U", "Ü" => "U", "Ý" => "Y", "à" => "a", "á" => "a", "â" => "a", "ã" => "a", "ä" => "a", "å" => "a", "ç" => "c", "è" => "e", "é" => "e", "ê" => "e", "ë" => "e", "ì" => "i",  "í" => "i", "î" => "i", "ï" => "i", "ð" => "o", "ò" => "o", "ó" => "o", "ô" => "o", "õ" => "o", "ö" => "o", "ù" => "u", "ú" => "u", "û" => "u", "ü" => "u", "ý" => "y", "ÿ" => "y");
            //Remplacement des caractères interdit dans le nom du fichier
            $fichier = strtr($fichier, $caractèreInterdit);
            //Envoie du fichier dans le dossier destinataire
            move_uploaded_file($_FILES['file']['tmp_name'], $dossier . $fichier);
            $msg = "Le fichier a bien été envoyé.";
        }
        else {
            $msg = "Le fichier envoyé est trop lourd.";
        }
    }
    //Si le fichier envoyé a un mauvais type
    else {
        $msg = "Le type de fichier que vous avez envoyé n'est pas autorisé.";
    }
}
//Si un fichier n'a pas été envoyé
else {
    //Nettoyage de la superglobale
    unset($_FILES['file']);
}

?>