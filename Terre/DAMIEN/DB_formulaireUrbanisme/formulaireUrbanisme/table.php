<?php
/* Création de la table `nature`*/

    $table = "CREATE TABLE IF NOT EXISTS `notation_ville` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `ville` varchar(255),
    `dechets` int(5),
    `pesticides` int (5),
    `fleurs` int (5),
    `code_postal` int,
    PRIMARY KEY (`id`)) 
    ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8";


    $tableau="CREATE TABLE IF NOT EXISTS `espace_membres_terroir` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `pseudo` varchar(250) NOT NULL,
    `pass` varchar(250) NOT NULL,
    `email` varchar(250) NOT NULL,
    `dat_de_naissance` date NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8";

    $tablu="CREATE TABLE IF NOT EXISTS `groupes` (
        `id_groupe` int(11) NOT NULL AUTO_INCREMENT,
        `membre` varchar(255) NOT NULL,
        `administrateur` varchar(255) NOT NULL,
        `modérateur` varchar(255) NOT NULL,
        PRIMARY KEY (`id_groupe`)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8";
    
        /*Déchargement des données de la table nature */
        $connexion->exec($table);
        $connexion->exec($tableau);
        $connexion->exec($tablu);
?>