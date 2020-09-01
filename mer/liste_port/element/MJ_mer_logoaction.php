<?php 
    //Condition pour l'affichage du logo port propre
    switch($i['label_pp']) {
        case 1: 
        //Condition si le port est juste engagé
?>
            <img src="img/1pp.svg" alt="Engagé Port Propre" width="30" height="30" data-toggle="tooltop" data-placement="bottom" title="Engagé Port Propre">
<?php       
            break;
        case 2: 
        //Condition si le port est certifié
?>
            <img src="img/2pp.svg" alt="Certifié Port Propre" width="30" height="30" data-toggle="tooltop" data-placement="bottom" title="Certifié Port Propre">
<?php
            break;
    }

    //Condition pour l'affichage du logo actifs en biodiversité 
    switch($i['label_aeb']) {
        case 1: 
        //Condition si le port est juste engagé
?>
            <img src="img/1aeb.svg" alt="Engagé Actifs en Biodiversité" width="30" height="30" data-toggle="tooltop" data-placement="bottom" title="Engagé Actifs en Biodiversité">
<?php
            break;
        case 2: 
            //Condition si le port est certifié
?>
            <img src="img/2aeb.svg" alt="Certifié Actifs en Biodiversité" width="30" height="30" data-toggle="tooltop" data-placement="bottom" title="Certifié Actifs en Biodiversité">
<?php 
            break;
    }

    //Condition pour l'affichage du pavillon bleu
    if($i['label_pb']){ 
?>
        <img src="img/pb.png" alt="Pavillon Bleu" height="30" data-toggle="tooltop" data-placement="bottom" title="Pavillon Bleu">
<?php
    }
?>