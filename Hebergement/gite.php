 <?php
    include 'header_hebergement.php';
    include 'functions_gite.php';
    include 'lien_connexion_gite.php';   ?>
 <div class="main container-fluid">

     <h2>Les Gîtes dans le var</h2>

     <article class="article article_1 container">
         <h2>Le label écogîte<img class="leaf_icon" src="img/leaf.png" alt="feuille"></h2>
         <div class="container art-img"><img src="img/ecogite.jpg" alt=""></div>



         <p>Un hebergement Ecogite est un hébergement labellisé Gites de France conçu ou restauré selon des techniques ou matériaux reconnus comme ayant un faible impact environnemental. <br>
             Il répond à des exigences d'intégration par une architecture en cohérence globale avec l'environnement bâti ou naturel. Il a vocation à contribuer au respect ou à l'amélioration du paysage pré-existant.</p>
         <p><br> La prise en compte de ces critères techniques ne suffit pas: une démarche pédagogique d'écocitoyenneté doit aussi être engagée afin de sensibiliser les hôtes au respect de l'environnement et à sa protection.</p>
         <h2>Quelques gites présents dans le var</h2>


         <?php

            ?>
         <?php
            include 'config_bdd_gite.php';
            if (isset($_SESSION['auth'])) {
                $id_user = $_SESSION['auth']['id'];

                $witch = $bdd->query("SELECT * FROM users WHERE id= $id_user");
                $donnee = $witch->fetch();
                $role = $donnee['role'];
            }
            ?>
         <div class="table-responsive ">
             <table class="table table-bordered table-gite ">
                 <thead class="thead-light">
                     <th>Nom du gîte</th>
                     <th>Localisation</th>
                     <th>Notation moyenne</th>
                     <th>Votre note</th>
                     <?php if (isset($_SESSION['auth']) && $role == "admin") : ?>
                         <th>Maj</th>
                         <th>Supp</th>
                     <?php endif ?>

                 </thead>

                 <?php


                    // SELECTIONNE TOUTES LES DONNEES DE LA TABLE GITES. CHAQUE INFO NE RESSORT QU'UNE FOIS GRACE AU DISTINCT
                    $req = $bdd->query(' SELECT DISTINCT * FROM gites');
                    // TANT QU'IL Y A DES DONNEES AFFICHE LES LIGNE PAR LIGNE DANS UN TABLEAU
                    while ($donnees = $req->fetch()) {
                        // Enregistrement des données sous forme de variables

                        $nom = $donnees['nom'];
                        $localisation = $donnees['localisation'];
                        $id_gite = $donnees['id'];
                        $note_moyenne = $donnees['note_moyenne'];
                        //    On défini la note de base sur 0 afin de que si une note n'est pas définie il ne prenne pas la note du gîte précédent.
                        $note = 0;
                        if (isset($_SESSION['auth'])) :
                            $noteIdUsers = $id_user;
                            $noteIdGite = $id_gite;
                            // Deuxième requête afin de séléctionner la note de la table note quand l'id du gîte correspond au gite en question et que l'id_users correspond à l'id de la personne connectée
                            $req2 = $bdd->query(' SELECT  note FROM note WHERE id_gite=' . $id_gite . ' AND id_users=' . $id_user);
                            while ($donnees = $req2->fetch()) {
                                $note = $donnees['note'];
                            }
                        endif;

                    ?>

                     <tbody>
                         <tr>
                             <?php
                                // VARIABLE NOTE = DONNEES DANS LA TABLE NOTE

                                // Ceci est la petite feuille pour la notation 
                                $feuille_verte = '<img src="img/mini_leaf.png" alt="Mini logo feuille">';
                                $feuille_grise = '<img src="img/mini_leaf_black.png" alt="Mini logo feuille">'; ?>
                             <!-- MIX ENTRE HTML ET PHP, AFFICHE LES DONNEES DE LA CATEGORIE NOM -->

                             <td>

                                 <a href="article_gite.php?id=<?php echo $id_gite ?>"><?php echo $nom ?></a>

                                 </form>
                             </td>


                             <td>
                                 <form action="article_gite.php" method="get" id="article_gite">
                                     <input type="hidden" name="id" value="<?php echo $id_gite ?>">
                                     <!-- On transforme le lien en bouton submit qui aura comme aciton le formulaire contenant l'id article_gite -->
                                     <a href="#" onclick="document.getElementById('article_gite').submit()"><?php echo $localisation ?></a>

                                 </form>
                             </td>


                             <?php
                                // Récupération des données de la table gites 
                                $note_gite_moyenne = $donnees['note_moyenne'];
                                $nombre_note = $donnees['nombre_note'];
                                $note_add = $donnees['note_add'];
                                ?> <td>
                                 <?php



                                    //  BOUCLE PERMETTANT D'AFFICHER UNE PETITE FEUILLE POUR CHAQUE INDENTATION DE $i jusqu'a nore moyenne

                                    $i = 0;
                                    while ($i < $note_moyenne) {
                                        echo $feuille_verte;
                                        $i++;
                                        // Boucle for pour compléter par des feuilles grises jusqu'a 5 (La notation étant /5)
                                    }
                                    for ($u = $i; $u < 5; $u++) {
                                        echo $feuille_grise;
                                    }

                                    ?>

                             </td>




                             <td>

                                 <!-- Si il n'y a pas de session auth active -->
                                 <?php



                                    if (!isset($_SESSION['auth'])) : ?>
                                     <div class="alert alert-secondary">Connectez vous pour noter ce gîte</div>
                                 <?php

                                    elseif (($note > 0) && ($noteIdUsers == $id_user) && isset($noteIdGite)) :
                                        $i = 0;

                                        while ($i < $note) {
                                            echo $feuille_verte;
                                            $i++;
                                            // Boucle for pour compléter par des feuilles grises jusqu'a 5 (La notation étant /5)
                                        }
                                        for ($u = $i; $u < 5; $u++) {
                                            echo $feuille_grise;
                                        }
                                    ?>


                                 <?php else : ?>
                                     <!-- Sinon : -->
                                     <div class="row" style="display: flex; justify-content: center;">

                                         <form action="moyenne_gite.php" method="post">
                                             <input type="hidden" value=<?php echo $id_gite ?> name="id">
                                             <input type="hidden" value=<?php echo $note_gite_moyenne ?> name="note_moyenne">
                                             <input type="hidden" value=<?php echo $nombre_note ?> name="nombre_note">
                                             <input type="hidden" value=<?php echo $note_add ?> name="note_add">
                                             <input type="hidden" value="1" name="note-feuille">
                                             <input type="image" name="" src="img/mini_leaf_black.png" alt="mini logo feuille">

                                         </form>

                                         <form action="moyenne_gite.php" method="post">
                                             <input type="hidden" value=<?php echo $id_gite ?> name="id">
                                             <input type="hidden" value=<?php echo $note_gite_moyenne ?> name="note_moyenne">
                                             <input type="hidden" value=<?php echo $nombre_note ?> name="nombre_note">
                                             <input type="hidden" value=<?php echo $note_add ?> name="note_add">
                                             <input type="hidden" value="2" name="note-feuille">
                                             <input type="image" name="" src="img/mini_leaf_black.png" alt="mini logo feuille">
                                         </form>
                                         <form action="moyenne_gite.php" method="post">
                                             <input type="hidden" value=<?php echo $id_gite ?> name="id">
                                             <input type="hidden" value=<?php echo $note_gite_moyenne ?> name="note_moyenne">
                                             <input type="hidden" value=<?php echo $nombre_note ?> name="nombre_note">
                                             <input type="hidden" value=<?php echo $note_add ?> name="note_add">
                                             <input type="hidden" value="3" name="note-feuille">
                                             <input type="image" id="leaf2" data_value="2" name="note-feuille" src="img/mini_leaf_black.png" alt="mini logo feuille" value=2>
                                         </form>
                                         <form action="moyenne_gite.php" method="post">
                                             <input type="hidden" value=<?php echo $id_gite ?> name="id">
                                             <input type="hidden" value=<?php echo $note_gite_moyenne ?> name="note_moyenne">
                                             <input type="hidden" value=<?php echo $nombre_note ?> name="nombre_note">
                                             <input type="hidden" value=<?php echo $note_add ?> name="note_add">
                                             <input type="hidden" value="4" name="note-feuille">
                                             <input type="image" id="leaf2" data_value="2" name="note-feuille" src="img/mini_leaf_black.png" alt="mini logo feuille" value=2>
                                         </form>
                                         <form action="moyenne_gite.php" method="post">
                                             <input type="hidden" value=<?php echo $id_gite ?> name="id">
                                             <input type="hidden" value=<?php echo $note_gite_moyenne ?> name="note_moyenne">
                                             <input type="hidden" value=<?php echo $nombre_note ?> name="nombre_note">
                                             <input type="hidden" value=<?php echo $note_add ?> name="note_add">
                                             <input type="hidden" value="5" name="note-feuille">
                                             <input type="image" id="leaf2" data_value="2" name="note-feuille" src="img/mini_leaf_black.png" alt="mini logo feuille" value=2>
                                         </form>
                                     </div>


                                 <?php endif ?>





                             </td>
                             <?php


                                ?>




                             <!-- javascript notation -->
                             <script>
                                 /* FONCTION QUI NE MARCHE PAS POUR NOTATION 
                             function changecolor() {
                                 if (document.getElementById("leaf1").onmouseover) {
                                     document.getElementById("leaf1").src = "img/mini_leaf.png";
                                 } else if (document.getElementById("leaf2").onmouseover) {
                                     document.getElementById("leaf1").src = "img/mini_leaf.png";
                                     document.getElementById("leaf2").src = "img/mini_leaf.png";
                                 } else if (document.getElementById("leaf3").onmouseover) {
                                     document.getElementById("leaf1").src = "img/mini_leaf.png";
                                     document.getElementById("leaf2").src = "img/mini_leaf.png";
                                     document.getElementById("leaf2").src = "img/mini_leaf.png";
                                 }
                             }


                             function rechangecolor() {
                                 if (document.getElementById("leaf1").onmouseout) {
                                     document.getElementById("leaf1").src = "img/mini_leaf_black.png";
                                 }else if (document.getElementById("leaf2").onmouseover) {
                                    document.getElementById("leaf1").src = "img/mini_leaf_black.png";
                                    document.getElementById("leaf1").src = "img/mini_leaf_black.png";
                                 }
                             }
                             */
                             </script>


                             <?php if (isset($_SESSION['auth']) && $role == "admin") : ?>
                                 <td>
                                     <form action="maj_gite.php" method="post">
                                         <input name="id_maj" value="<?= $id_gite ?>" type="hidden" />
                                         <input type="submit" name="maj" value="maj" class="btn btn-primary text-center" /></form>
                                 </td>

                                 <td>
                                     <form action="supp_gite.php" method="post">
                                         <input type="hidden" name="supp_gite" value="<?php echo $id_gite ?>">
                                         <input type="submit" name="supp_maj" value="supp" class="btn">
                                     </form>
                                 </td>
                         <?php endif;
                            } ?>
                         </tr>

                     </tbody>
             </table>
         </div>
     </article>



     <article class="article article_1 container">
         <h2>Ajoutez vos Ecogites de la région !</h2>
         <p>Tous les Ecogîtes du Var ne sont pas encore répertoriés, aidés nous à compléter notre base de donnée !</p>
         <?php
            include 'insert_gite.php';
            ?>


     </article>
 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <?php
    include 'footer.php';

    ?>