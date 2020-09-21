<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terre</title>
    <link rel="stylesheet" href="css/terroir.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--FONT-->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@900&display=swap" rel="stylesheet"> 

</head>
<body>
    <?php
    include "header.php";
    ?>
        <div class="bgHeader">
            
            <div class="offset-xl-1 col-xl-10 rectangleBlancHeader">
                <!-- <div class="rectangleBlancHeader"> -->
                <div class="contenuJumbotron">
                    <img src="img/terreEcolo.png" alt="terre ecologique" class="terreEcolo">
                    <!-- <div class="contenuJumbotron"></div> -->
                    <div class="p-5 col-lg-11">
                        <h1 class="display-4 text-right font-weight-bold marginTextJumbotron laTerreEcologique">La terre écologique</h1>
                        <p class="lead font-weight-bold text-right">This is a simple hero unit, a simple jumbotron-style component<br> for calling extra attention to featured content or information.<br>
                            Paphius quin etiam et Corneliu. <!--senatores,--> <br><!--ambo venenorum artibus pravis se polluisse confessi, eodem pronuntiante Maximino--> </p>
                        <!-- <a class="btn btn-outline-danger btn-lg float-right btnJumbotron" href="#" role="button">Découvrir</a> -->
                        <button type="button" class="btn btn-outline-dark btn-lg font-weight-bold float-right btnJumbotron">Découvrir</button>
                    </div>
                </div>
            </div>
            <div>
                <p class="titrePrincipalTerre offset-xl-1 offset-lg-1 offset-md-1">TERRE</p>
            </div>
        </div>

<section>

<div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
    <div class="card">
      <img src="img/jardinDraguignan.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Les jardins partagés</h5>
        <p class="card-text">Le réseau des Jardins Solidaires Méditerranéens rassemble une grande diversité de
                            jardins associatifs du Sud Est de la France. Chaque jardin est unique, pourtant tous se reconnaissent 
                            parce qu’ils partagent et portent les mêmes valeurs : respect de la personne, de l’environnement, la 
                            solidarité et le partage.
                            50 à 100 jardins solidaires fleurissent sur le pourtour méditerranéen.
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/listeJardin.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Liste des jardins partagés</h5>
        <p class="card-text">   •	Le jardin en partage "Maurice Rouge" à Tourves de l’association "Naturellement" : http://www.reseaujsm.org/annuaire/8...<br>
                                •	Semons, le coeur du monde à Saint Cyr sur mer de l’association E-Ki-Libre : http://www.reseaujsm.org/annuaire/8...<br>
                                •	Domaine de l’Ermitage à St Mandrier/mer de l’association "Partager la Terre" : http://partager-la-terre.fr/<br>
                                •	Le jardin de(s) âges à Draguignan : http://www.lejardindessages.org/
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/agricultureBio.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Agriculture Bio</h5>
        <p class="card-text">AgribioVar est l’association qui rassemble les producteurs biologiques du Var.
                            Créée en 1997, elle agit pour promouvoir et développer l’agriculture biologique en 
                            travaillant avec les différents acteurs du département (agriculteurs, consommateurs,
                            élus, collectivités, entreprises, associations,...)
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/vinVar.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Les vins</h5>
        <p class="card-text">Le vin bio, quant à lui, existe officiellement depuis 2012 avec la reconnaissance
                            du vin bio par l’Europe. Auparavant, il n’existait pas à proprement parler de « vin bio », mais des 
                            vins élaborés à partir de raisins « issus de l’agriculture biologique ». Aujourd’hui, les règles 
                            européennes de vinification biologique exigent l’utilisation d’ingrédients bio, définissent des 
                            restrictions et des interdictions dans l’utilisation de certains procédés de transformation, imposent
                            le respect d’une liste restreinte d’additifs et auxiliaires œnologiques ainsi que des seuils pour 
                            les niveaux de dioxyde de soufre dans le vin.
        </p>
      </div>
    </div>
  </div>
</div>

</section>



        <?php
            include "footer.php";
        ?>
        <script src="js/bootstrap.js"></script>

</body>
</html>
