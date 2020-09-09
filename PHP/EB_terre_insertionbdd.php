<?php

$insert = "INSERT INTO `nature` (`id`, `nom_espece`, `nom_latin`, `dat`, `lieu`) VALUES
(3, 'rose', 'tulipus', '2020-09-09', 'sainte maxime'),
(6, 'Lotus sacré', 'Nelumbo nucifera', '2020-08-13', 'frejus');
COMMIT";

    $connexion->exec($insert);

?>
