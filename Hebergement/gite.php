 <?php
    include 'header_hebergement.php';
    include 'functions_gite.php';    ?>
 <div class="main container-fluid">

     <h2>Les Gîtes dans le var</h2>

     <article class="article article_1 container">
         <h2>Le label écogîte<img class="leaf_icon" src="img/leaf.png" alt="feuille"></h2>
         <div class="container art-img"><img src="img/ecogite.jpg" alt=""></div>



         <p>Un hebergement Ecogite est un hébergement labellisé Gites de France conçu ou restauré selon des techniques ou matériaux reconnus comme ayant un faible impact environnemental. <br>
             Il répond à des exigences d'intégration par une architecture en cohérence globale avec l'environnement bâti ou naturel. Il a vocation à contribuer au respect ou à l'amélioration du paysage pré-existant.</p>
         <p><br> La prise en compte de ces critères techniques ne suffit pas: une démarche pédagogique d'écocitoyenneté doit aussi être engagée afin de sensibiliser les hôtes au respect de l'environnement et à sa protection.</p>
         <h2>Quelques gites présents dans le var</h2>

         <!--<table class="table table-bordered table-gite">
             <thead class="thead-light">
                 <th>Nom du gîte</th>
                 <th>Localisation</th>
                 <th>Notation</th>
             </thead>
             <tbody>
                 <tr>
                     <td>Ecogites du bivosque</td>
                     <td>Bivosque</td>
                     <td>
                         <img src="img/mini_leaf.png" alt="Mini logo feuille">
                         <img src="img/mini_leaf.png" alt="Mini logo feuille">
                         <img src="img/mini_leaf.png" alt="Mini logo feuille">
                         <img src="img/mini_leaf.png" alt="Mini logo feuille">
                         <img src="img/mini_leaf.png" alt="Mini logo feuille">
                     </td>
                      https://www.airbnb.fr/rooms/31353425?source_impression_id=p3_1598274342_vYWvmY3lcuxojC2r 
                     </tr>
                 <tr>
                     <td>Gite du var</td>
                     <td>Saint raphael</td>
                     <td>
                         <img src="img/mini_leaf.png" alt="Mini logo feuille">
                         <img src="img/mini_leaf.png" alt="Mini logo feuille">
                         <img src="img/mini_leaf.png" alt="Mini logo feuille">

                     </td>
                 </tr>
             </tbody>
         </table>  -->
         <?php

            ?>
         <?php
            include 'config_bdd_gite.php';
            $witch = $bdd->query("SELECT * FROM users");
            $donnee = $witch->fetch();
            $role = $donnee['role'];

            ?>
         <table class="table table-bordered table-gite">
             <thead class="thead-light">
                 <th>Nom du gîte</th>
                 <th>Localisation</th>
                 <th>Notation moyenne</th>
                 <th>Votre note</th>
                 <?php if (isset($_SESSION['auth']) && $role == "admin") : ?>>
                 <th>Maj</th>
                 <th>Supp</th>
             <?php endif ?>

             </thead>



             <?php

                // SELECTIONNE TOUT DANS LA BDD gites
                $req = $bdd->query('SELECT * FROM `gites` LEFT JOIN note ON gites.id=note.id_gite');
                // TANT QU'IL Y A DES DONNEES AFFICHE LES LIGNE PAR LIGNE DANS UN TABLEAU
                while ($donnees = $req->fetch()) {
                    // Enregistrement des données sous forme de variables

                    $nom = $donnees['nom'];
                    $localisation = $donnees['localisation'];
                    $id_gite = $donnees['id'];
                    $note_moyenne = $donnees['note_moyenne'];
                    $note= $donnees['note'];

                ?>

                 <tbody>
                     <tr>
                         <?php
                            // VARIABLE NOTE = DONNEES DANS LA TABLE NOTE
                            
                            // Ceci est la petite feuille pour la notation 
                            $feuille = '<img src="img/mini_leaf.png" alt="Mini logo feuille">';
                            // MIX ENTRE HTML ET PHP, AFFICHE LES DONNEES DE LA CATEGORIE NOM
                            echo '<td>' . $nom . '</td>';
                            // MIX ENTRE HTML ET PHP, AFFICHE LES DONNEES DE LA CATEGORIE NOM
                            echo '<td>' . $localisation . '</td>';
                            echo '<td>' ?> 
                        
                            <?php
                        // Récupération des données de la table gites 
                            $note_gite_moyenne = $donnees['note_moyenne'];
                            $nombre_note = $donnees['nombre_note'];
                            $note_add = $donnees['note_add'];
                        ?>
                            <?php
                                            //  BOUCLE PERMETTANT D'AFFICHER UNE PETITE FEUILLE POUR CHAQUE INDENTATION DE NOTE
                                            for ($i = 1; $i <= $note_moyenne; $i++) {
                                                echo $feuille;
                                            }
                                            '</td>' ?>
                         
                         <td>

                            
                       <?php  ?>






                            <!-- Si il n'y a pas de session auth active -->
                            <?php if(!isset($_SESSION['auth'])){ ?>
                                <div class="alert alert-secondary">Connectez vous pour noter ce gîte</div> 
                            <?php }
                            
                            else if ($note!=NULL)
                            {
                                for ($i = 1; $i <= $note; $i++) {
                                    echo $feuille;
                                }
                            }
                            
                            
                            
                            else{ ?>

                                    
                            

                                                <!-- Sinon : -->
                                 <div class="row"style="display: flex; justify-content: center;">
                                     
                                     <form action="moyenne_gite.php" method="post">
                                         <input type="hidden" value=<?php echo $id_gite ?> name="id">
                                         <input type="hidden" value=<?php echo $note_gite_moyenne ?> name="note_moyenne">
                                         <input type="hidden" value=<?php echo $nombre_note ?> name="nombre_note">
                                         <input type="hidden" value=<?php echo $note_add ?> name="note_add">
                                         <input type="hidden" value="1" name="note-feuille">
                                         <input type="image"   onmouseover="changecolor()" onmouseout="rechangecolor()" name="" src="img/mini_leaf_black.png" alt="mini logo feuille">
                                         </fieldset>
                                     </form>
                                   
                                     <form action="moyenne_gite.php" method="post">
                                         <input type="hidden" value=<?php echo $id_gite ?> name="id">
                                         <input type="hidden" value=<?php echo $note_gite_moyenne ?> name="note_moyenne">
                                         <input type="hidden" value=<?php echo $nombre_note ?> name="nombre_note">
                                         <input type="hidden" value=<?php echo $note_add ?> name="note_add">
                                         <input type="hidden" value="2" name="note-feuille">
                                         <input type="image"   onmouseover="changecolor()" onmouseout="rechangecolor()" name="" src="img/mini_leaf_black.png" alt="mini logo feuille">
                                     </form>
                                     <form action="moyenne_gite.php" method="post">
                                         <input type="hidden" value=<?php echo $id_gite ?> name="id">
                                         <input type="hidden" value=<?php echo $note_gite_moyenne ?> name="note_moyenne">
                                         <input type="hidden" value=<?php echo $nombre_note ?> name="nombre_note">
                                         <input type="hidden" value=<?php echo $note_add ?> name="note_add">
                                         <input type="hidden" value="3" name="note-feuille">
                                         <input type="image" id="leaf2" data_value="2" onmouseover="changecolor()" onmouseout="rechangecolor()" name="note-feuille" src="img/mini_leaf_black.png" alt="mini logo feuille" value=2>
                                     </form>
                                     <form action="moyenne_gite.php" method="post">
                                         <input type="hidden" value=<?php echo $id_gite ?> name="id">
                                         <input type="hidden" value=<?php echo $note_gite_moyenne ?> name="note_moyenne">
                                         <input type="hidden" value=<?php echo $nombre_note ?> name="nombre_note">
                                         <input type="hidden" value=<?php echo $note_add ?> name="note_add">
                                         <input type="hidden" value="4" name="note-feuille">
                                         <input type="image" id="leaf2" data_value="2" onmouseover="changecolor()" onmouseout="rechangecolor()" name="note-feuille" src="img/mini_leaf_black.png" alt="mini logo feuille" value=2>
                                     </form>
                                     <form action="moyenne_gite.php" method="post">
                                         <input type="hidden" value=<?php echo $id_gite ?> name="id">
                                         <input type="hidden" value=<?php echo $note_gite_moyenne ?> name="note_moyenne">
                                         <input type="hidden" value=<?php echo $nombre_note ?> name="nombre_note">
                                         <input type="hidden" value=<?php echo $note_add ?> name="note_add">
                                         <input type="hidden" value="5" name="note-feuille">
                                         <input type="image" id="leaf2" data_value="2" onmouseover="changecolor()" onmouseout="rechangecolor()" name="note-feuille" src="img/mini_leaf_black.png" alt="mini logo feuille" value=2>
                                     </form> 
                                 </div>
                                 </td>
                                        <?php  
                                        }
                                        
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
                         <?php endif ?>
                         
                     <?php
                    }
                
                        ?>
                     </tr>
                 </tbody>
         </table>

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