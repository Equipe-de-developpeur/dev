<?php

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

    $insertAvrg = $pdo->prepare("UPDATE `jm_mer_liste_port` SET `liste_port_moyenne` = '$average' WHERE `liste_port_lieu_id` = '$voteLocalisation'");
    $insertAvrg->execute();
}

?>