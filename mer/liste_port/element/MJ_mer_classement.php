<?php

//Condition de critère
if(isset($_POST['critere'])) { //Si a un critère a été envoyé
    if ($_POST['critere'] == "nom") { //Si ce critère est nom
            $sql = $pdo->prepare("SELECT * FROM `jm_mer_liste_port` ORDER BY `jm_mer_liste_port`.`liste_port_lieu` ASC");
            echo '<p class="mb-1">Votre liste est rangée selon l\'ordre alphabétique des noms.</p>';
            //Selection selon le critère et message d'indication à l'utilisateur
        }
    else if ($_POST['critere'] == "localisation") { //Si ce critère est la localisation
            $sql = $pdo->prepare("SELECT * FROM `jm_mer_liste_port` ORDER BY `jm_mer_liste_port`.`liste_port_localisation` ASC");
            echo '<p>Votre liste est rangée selon l\'ordre alphabétique des emplacements.</p>';
            //Selection selon le critère et message d'indication à l'utilisateur
        }
    else if ($_POST['critere'] == "pp") { //Si ce critère est le label Port Propres
            $sql = $pdo->prepare("SELECT * FROM `jm_mer_liste_port` ORDER BY `jm_mer_liste_port`.`liste_port_label_pp` DESC");
            echo '<p>Votre liste est rangée selon leur label "Port Propre".</p>';
            //Selection selon le critère et message d'indication à l'utilisateur
        }
    else if ($_POST['critere'] == "aeb") { //Si ce critère est le label Actifs en Biodiversité
            $sql = $pdo->prepare("SELECT * FROM `jm_mer_liste_port` ORDER BY `jm_mer_liste_port`.`liste_port_label_aeb` DESC");
            echo '<p>Votre liste est rangée selon leur label "Actifs en Biodiversité".</p>';
            //Selection selon le critère et message d'indication à l'utilisateur
        }
    else if ($_POST['critere'] == "pb") { //Si ce critère est le label Pavillon Bleu
            $sql = $pdo->prepare("SELECT * FROM `jm_mer_liste_port` ORDER BY `jm_mer_liste_port`.`liste_port_label_pb` DESC");
            echo '<p>Votre liste est rangée selon leur label "Pavillon Bleu".</p>';
            //Selection selon le critère et message d'indication à l'utilisateur
        }
}
else { //Sinon, s'il y a pas de critère
    $sql = $pdo->prepare("SELECT * FROM `jm_mer_liste_port`");
    }

$sql->execute();
?>