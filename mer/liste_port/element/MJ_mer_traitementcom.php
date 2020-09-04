<?php

if (isset($_POST["username"])) {

    $ID = $_POST["id"];
    $username = $_POST["username"];
    $precommentaire = $_POST["commentaire"];

    $commentaire = str_replace("'", "\'", $precommentaire);

    $insertcom = $pdo->prepare("INSERT INTO `jm_mer_commentaire_port`(`lieu_id`, `username`, `commentaire`) VALUES ('$ID', '$username', '$commentaire')");
    $insertcom->execute();
}
