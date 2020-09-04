<?php

function securite($donnee) {
    $donnee = htmlspecialchars($donnee);
    $donnee = trim($donnee);
    $donnee = stripslashes($donnee);
    $donnee = str_replace("'", "\'", $donnee);
    return $donnee;
}

if (isset($_POST["username"])) {

    $ID = $_POST["id"];
    $username = securite($_POST["username"]);
    $commentaire = securite($_POST["commentaire"]);

    $insertcom = $pdo->prepare("INSERT INTO `jm_mer_commentaire_port`(`lieu_id`, `username`, `commentaire`) VALUES ('$ID', '$username', '$commentaire')");
    $insertcom->execute();
}
