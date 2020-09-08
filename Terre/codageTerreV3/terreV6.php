<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terre</title>
    <link rel="stylesheet" href="css/terreV6.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--FONT-->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@900&display=swap" rel="stylesheet"> 

</head>
<body>
        
    <header>
        <div class="bgHeader">
            <!-- <img src="img/logo.png" alt="logo var nature" class="logo  offset-xl-10 col-xl-1 offset-lg-10 col-lg-2 offset-md-10 col-md-2">
            <div class="col-xl-6 col-lg-12 barreMenu">col-xl-6 pour la barre de menu -->
                <!-- <div class="d-flex titresMenu offset-xl-3 col-xl-5 offset-lg-3 col-lg-5">
                    <a href="#" class="titres"><p class="mr-5 mt-4">Accueil</p></a>
                    <a href="#" class="titres"><p class="mr-5 mt-4">Mer</p></a>
                    <a href="#" class="titres"><p class="mr-5 mt-4">Activités</p></a>
                    <a href="#" class="titres"><p class="mr-5 mt-4">Hébergement</p></a>
                </div>
            </div> -->
            <!--LOGO caché dans la version desktop-->
            <img src="img/logo.png" alt="logo var nature" class="logoDesktopCacher  offset-xl-10 col-xl-1 offset-lg-9 col-lg-2 offset-md-10 col-md-2  offset-sm-9 col-sm-2 offset-8 col-4">
            
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
    </header>
    <!--------BODY DE LA PAGE------------>
    <!--FORET-->
    <section class="responsiveImage575px">
        <div class="d-flex justify-content-center mt-5 ">
            <img src="img/quatrePoints.png" alt="quatre points section ecologique" class="quatrePointsResponsive ">
        </div>
        <div class="mt-5 blocForetResponsive">
            
                <img src="img/foret.jpg" alt="foret ecologique" class="offset-xl-1 col-xl-5 photoForetDessous">
                <img src="img/foret.jpg" alt="foret ecologique" class="offset-xl-2 col-xl-5 col-md-12 photoForetDessus photoForetResponsive">
            
            <div class="float-right p-5 blocTexteForet blocTexteForetResponsive">
                <div class="titreLesActionEnForet">
                    <h2 class="titreLesActionsEn">Les actions en</h2>
                    <h1 class="titreForet">Forêt</h1>
                </div>
                <div class="rectangleBlancResponsive"></div>
                <div class="paragrapheButton">
                    <p class="paragrapheForet">Cursibus potentissimorumque regionum <br>passibus ante nec gestas cursibus celeritate<br>
                        ebris potuisse potentissimorumque res<br> proeliorum usurpare nec populorum passibus
                        nec oculos </p>
                    <button type="button" class="btn btn-outline-dark btn-lg font-weight-bold float-left btnJumbotron btnForetResponsive">Découvrir</button>
                </div>
            </div>
        </div>
    </section>
    <!--TERRE-->
    <section class="sectionTerreResponsive">
        <div class="d-flex justify-content-center mt-5">
            <img src="img/quatrePoints.png" alt="quatre point section ecologique" class="quatrePointsResponsive">
        </div>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="rectangleBlancTerreResponsive"></div>
                <div class="titreButtonTerreResponsive">
                    <div class="titreLesActionSurTerre">
                        <h2 class="titreLesActionsSur">Les actions sur la</h2>
                        <h1 class="titreTerre">Terre</h1>
                    </div>
                    <div class="paragrapheButtonTerre">
                        <p class="paragrapheTerre text-right">Cursibus potentissimorumque regionum <br>passibus ante nec gestas cursibus celeritate<br>
                            ebris potuisse potentissimorumque res<br> proeliorum usurpare nec populorum passibus
                            nec oculos </p>
                        <button type="button" class="btn btn-outline-dark btn-lg font-weight-bold btnJumbotron float-right">Découvrir</button>
                    </div>
                </div>
            
                <div class="imgTerre">
                    <img src="img/terre.jpg" alt="foret ecologique" class="photoTerreDessous offset-xl-5 col-xl-6 offset-xl-2">
                    <img src="img/terre.jpg" alt="foret ecologique" class="photoTerreDessus col-xl-5 photoTerreResponsive">
                </div>
            </div>
        </div>
    </section>
        <!--VILLE-->
    <section class="ville">
        <div class="d-flex justify-content-center mt-5">
            <img src="img/quatrePoints.png" alt="quatre point section ecologique" class="quatrePointsResponsive">
        </div>
        <div class="imageResponsive575px mt-5">
            
                <img src="img/ville.jpg" alt="ville ecologique" class="offset-xl-1 col-xl-5 photoVilleDessous">
                <img src="img/ville.jpg" alt="ville ecologique" class="offset-xl-2 col-xl-5 photoVilleDessus photoVilleResponsive">
            
            <div class="float-right p-5 blocTexteVille">
                <div class="titreLesActionEnVille">
                    <h2 class="titreVilleLesActionsEn">Les actions en</h2>
                    <h1 class="titreVille">Ville</h1>
                </div>
                <div class="rectangleBlancVilleResponsive"></div>
                <div class="paragrapheButtonVille">
                    <p class="paragrapheVille">Cursibus potentissimorumque regionum <br>passibus ante nec gestas cursibus celeritate<br>
                        ebris potuisse potentissimorumque res<br> proeliorum usurpare nec populorum passibus
                        nec oculos </p>
                    <button type="button" class="btn btn-outline-dark btn-lg font-weight-bold float-left btnJumbotron">Découvrir</button>
                </div>
            </div>
        </div>
    </section>
    <section class="commentaires">
        
        <div class="flecheNone">
            <img src="img/fleche-verte.png" alt="fleche commentaires" class="w-25 offset-xl-4 col-xl-4">
            <button type="button" class="btn btn-outline-dark btn-lg font-weight-bold btnJumbotron">+ Commentaires</button>
        </div>     
        

    </section>
        
    
        <footer>
    
        </footer>
    
        <script src="js/bootstrap.js"></script>
    </body>
</html>

