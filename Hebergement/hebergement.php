<?php 
include 'header_hebergement.php';

?>

<div class="main container-fluid">
    <h2>Différents types d'hebergements</h2>
    <hr class="separator">
    <div class="container row img_presentation">
        <div class="card col-xl-3 col-lg-3 col-md-3 col-sm-3">
            <h3>CAMPINGS</h3>
            
            <img src="img/hebergement_camping.jpg">
            <button type="button" class="btn btn-warning" style="margin-top: 10px;margin-bottom: 10px;">CAMPING</button>
        </div>

        <div class="card col-xl-3 col-lg-3 col-md-3 col-sm-3">
            <h3>GÎTES</h3>
            
            <img src="img/hebergement_gite.jpg">
            <button type="button" class="btn btn-warning" style="margin-top: 10px;margin-bottom: 10px;"> <a href="gite.php">GÎTE</a> </button>
        </div>


        <div class="card col-xl-3 col-lg-3 col-md-3 col-sm-3">
            <h3>INSOLITES</h3>
            
            <img src="img/hebergement_insolite.jpg">
            <button type="button" class="btn btn-warning" style="margin-top: 10px;margin-bottom: 10px;">INSOLITE</button>
        </div>

    </div>

    <hr class="separator">

    <article class="article article_1 container ">
            <h2>Qu'est ce qu'un hebergement écologique ?</h2>
            <p>Par définition, l’hébergement écologique répond à des critères garantissant le respect de l’environnement. La majorité sont labellisés. Ces logements vous feront consommer moins d'énergie tout en ayant un confot optimal. De plus, les gîtes écologiques sont généralement situés en pleine nature, dans un Parc Naturel de France.
Ces hébergements répondent à des exigences strictes en matière de prise en compte globale de l'environnement (économies d'énergie et utilisation d'énergies renouvelables, meilleure gestion des ressources en eau, tri sélectif et gestion des déchets, intégration au site et utilisation de matériaux locaux et sains) , et participent à la pratique d'un tourisme responsable</p>
        </article>
</div>












<?php include 'footer.php'; ?>