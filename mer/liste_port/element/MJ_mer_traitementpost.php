<?php

//TRAITEMENT VOTE

//Si un vote a été envoyé
if(isset($_POST["anchor"])) {
    //On récupère les valeurs envoyés
    $voteSent = $_POST["anchor"];
    $voteLocalisation = $_POST["idLocation"];
    $voteUser = $_POST["idUser"];

    //On essaye de séléctionner les votes que l'utilisateur aurait déjà pu faire dans ce port
    $sqlVoteMod = $pdo->prepare("SELECT `vote_port_value` FROM `jm_mer_vote_port` WHERE `vote_port_user` = '$voteUser' AND `vote_port_location` = '$voteLocalisation'");
    $sqlVoteMod->execute();
    $voteFetchMod = $sqlVoteMod->fetch(PDO::FETCH_ASSOC);
    //On associe le vote récolté dans $voteGotMod, si il y en a pas elle devient NULL
    if($voteFetchMod)
	{
		$voteGotMod = $voteFetchMod['vote_port_value'];
	}
    else
	{
		$voteGotMod=NULL;
	}

    //On vérifie qu'une valeur a bien été attribué à $voteGotMod, ou en d'autre mot que l'utilisateur a déjà voté sur ce port
    if(isset($voteGotMod)){
        //L'utilisateur a déjà voté, on prépare donc une modification
        $insertVote = $pdo->prepare("UPDATE `jm_mer_vote_port` SET `vote_port_value` = '$voteSent' WHERE `vote_port_user` = '$voteUser' AND `vote_port_location` = '$voteLocalisation'");
        $msg = "Votre vote a bien été modifié.";
    }
    else {
        //L'utilisateur n'a pas encore voté, on prépare donc une insertion
        $insertVote = $pdo->prepare("INSERT INTO `jm_mer_vote_port`(`vote_port_value`, `vote_port_user`, `vote_port_location`) VALUES ('$voteSent', '$voteUser', '$voteLocalisation')");
        $msg = "Votre vote a bien été enregistré.";
    }
    $insertVote->execute();

    //On récupère les votes faits sur ce port
    $sqlAverage = $pdo->prepare("SELECT `vote_port_value` FROM `jm_mer_vote_port` WHERE `vote_port_location` = '$voteLocalisation'");
    $sqlAverage->execute();
    $averageFetch = $sqlAverage->fetchAll(PDO::FETCH_ASSOC);

    //On récupère le nombre de vote
    $nbVote = count($averageFetch);
    $average = 0;
    foreach($averageFetch as $x) {
        $average += $x['vote_port_value'];
    }
    //On fait le calcul de la moyenne
    $average = $average / $nbVote;

    //On l'envoie dans la bdd, colonne moyenne de la table liste_port
    $insertAvrg = $pdo->prepare("UPDATE `jm_mer_liste_port` SET `liste_port_moyenne` = '$average' WHERE `liste_port_lieu_id` = '$voteLocalisation'");
    $insertAvrg->execute();
}

//TRAITEMENT ENVOIE FICHIER

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

//TRAITEMENT COMMENTAIRE

//Création de traitement de sécurité pour les commentaires reçus
function securite($donnee) {
    $donnee = htmlspecialchars($donnee);
    $donnee = trim($donnee);
    $donnee = stripslashes($donnee);
    $donnee = str_replace("'", "\'", $donnee);
    return $donnee;
}

//Si un commentaire est envoyé
if (isset($_POST["commentaire"])) {

    //Application du traitement de sécurité
    $username = $_POST["username"];
    $commentaire = securite($_POST["commentaire"]);

    try {
        //Si le commentaire envoyé n'est pas une réponse.
        if (!isset($_POST["parentId"])){
            //Si le commentaire est envoyé avec un fichier
            if (isset($_FILES['file']) && $_FILES['file']['name'] != NULL) {
                $insertcom = $pdo->prepare("INSERT INTO `jm_mer_commentaire_port`(`commentaire_port_lieu_id`, `commentaire_port_utilisateur_pseudo`, `commentaire_port_commentaire`, `commentaire_port_fichier`) VALUES ('$ID', '$username', '$commentaire', '$fichier')");
                $insertcom->execute();
            }
            //Si le commentaire n'est pas envoyé avec un fichier
            else {
                $insertcom = $pdo->prepare("INSERT INTO `jm_mer_commentaire_port`(`commentaire_port_lieu_id`, `commentaire_port_utilisateur_pseudo`, `commentaire_port_commentaire`) VALUES ('$ID', '$username', '$commentaire')");
                $insertcom->execute();
            }
        }
        //Si le commentaire envoyé est une réponse
        else {
            $parent = $_POST["parentId"];
            //Si la réponse est envoyé avec un fichier
            if (isset($_FILES['file']) && $_FILES['file']['name'] != NULL) {
                $insertcom = $pdo->prepare("INSERT INTO `jm_mer_commentaire_port`(`commentaire_port_lieu_id`, `commentaire_port_utilisateur_pseudo`, `commentaire_port_commentaire`, `commentaire_port_fichier`, `commentaire_port_parent_id`) VALUES ('$ID', '$username', '$commentaire', '$fichier', '$parent')");
                $insertcom->execute();
            }
            //Si la réponse n'est pas envoyé avec un fichier
            else {
                $insertcom = $pdo->prepare("INSERT INTO `jm_mer_commentaire_port`(`commentaire_port_lieu_id`, `commentaire_port_utilisateur_pseudo`, `commentaire_port_commentaire`, `commentaire_port_parent_id`) VALUES ('$ID', '$username', '$commentaire', '$parent')");
                $insertcom->execute();
            }
        }
        $msg = "Votre commentaire a bien été envoyé.";
    }
    //On gère les messages d'erreur en cas d'echec
    catch(Exception $e) {
        //si l'erreur est parce que le commentaire envoyé est déjà présent dans la bdd
        if($e->getCode() == 23000) {
            $msg = "Ce commentaire a déjà été envoyé.";
        }
        else {
            $msg = 'Erreur : ' . $e->getMessage();
        }
    }
}

?>