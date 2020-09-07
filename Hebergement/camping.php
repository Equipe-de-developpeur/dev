<!doctype html>
<html lang="fr">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link id="pagestyle" type="text/css" rel="stylesheet" href="../css/feuille1.css">
  
   
  <link rel="stylesheet" href="css/feuille1.css" type="text/css" media="screen"/>		
    </head>
    
 
    
 
   

    <body id="camping">

    <?php include 'header.php'; ?>

    <section2><br><br><br><br><br><br><br>
          <div class="article01 row bg-transparent mr-0 pr-0 text-center"style="color:maroon;"> 
            <div class="container-fluid"> </div>
              <div class="jumbotron" >
                <div class="container-fuid" style="justify-content: center;">  
      <p style="text-align:center;"><h3><strong>VENEZ DONNER VOTRE AVIS SUR LES CAMPINGS ECOLOGIQUES</strong></h3> <br>
     <p style="text-align:center;"> PARTAGEZ, COMMENTEZ EN PROPOSANT VOS IDEES AFIN D'AMLIORER LE TOURISME ECOLOGIQUE DANS LE VAR.<br>
           </div>
             </div>
              </div>

<div class="hebergement">
<div class="container-flex mt-5 mr-0 pr-0">
    <div class="row" style="margin-right: 0px;">
        <div class="col-mx-1 ">
           <h2 style="color: white;">DIFFERENTS TYPES DE CAMPINGS</h2>
        </div>
       
    <div class="container-fluid mt-5">
        <div class="row"> 
       <div class="column">
    <div class="container">
    
<?php include 'config_bdd_camping.php';?>
<div ID="contenu"></div>

<table class="table table-striped text-white">
  <thead class="text-white">
    <th>Nom du Camping</th>
    <th>Ville</th>
    <th>Code postal</th>
    <th>Téléphone</th>
    <th>Note attribuée</th>
    <th>MAJ/SUP</th>
  </thead>

<?php $req= $connexion->query ('SELECT * FROM hebergement');
 while ($donnees = $req->fetch())

{ 
  $id_camping = $donnees['id_camping'];
  $nom=$donnees['nom'];
  $ville=$donnees['ville'];
  $code_postal=$donnees['code_postal'];
  $telephone=$donnees['telephone'];
  $note=$donnees['note'];
  ?>
<tr>
<td><?php echo $nom;?></td>
<td><?php echo $ville?></td>
<td><?php echo $code_postal;?></td>
<td><?php echo $telephone;?></td>
<td><?php echo $note; ?></td>
<td>
  
  <form action="maj_news_camping.php"method="post">
  <input name="id_camping" value="<?php echo $id_camping ?>" type="hidden"/>
  <input type="submit" name="maj" id="maj" value="maj"/>
</form></td>
<td><form action="sup_news_camping.php"method="post">
  <input name="id_camping" value="<?php echo $id_camping?>" type="hidden"/>
  <input type="submit" name="sup" id="sup" value="sup"/>
</form></td><?php } ?>
</table>  

</form> 

<?php include 'inserer_camping.php'?>

</div>     
    
            
         </div>
       </div>         
    </div>    
  </div>
 
   </section2> 

   

    <section3><br><br>
          <div class="row text-center "style=" color:maroon;"> 
         <div class="container "></div>
           <div class="jumbotron_2  ">
           <div class="container-md  " style="justify-content:center">  
      <p style="text-align:center;"><strong>UN TOURISME DE QUALITÉ</strong> <br>
      <p>Actualités</p>
     <p style="text-align:justify;"> Le  classement des terrains de camping a été signé le 10 avril. Les campings qui se reclasseront après le 1er juillet 2019 seront assujettis à une nouvelle grille de classement.

C’est fait ! L’arrêté fixant les normes et la procédure de classement des terrains de camping et de caravanage et des parcs résidentiels 
de loisirs a (enfin) été signé le 10 avril. 
Quant au décret n°2019-300 , relatif à la procédure et aux décisions de classement des campings et PRL, il a lui aussi été
 publié. Pour plus d'informations cliquez sur le lien. <a href="http://www.ot-campings.com/L-Actualite/Decouvrez-les-nouvelles-normes-de-classement-des-campings">les nouvelles normes</a> <br><br>
    <p style="text-align: center;"><button type="button" class="btn btn-warning">Actualités</button></p>
      </p></p>
           </div>
      </div>
      </div>
      </div>
    </section3>

<footer>
 

  <?php include 'footer.php'; ?>
 
</footer>
<!-- JAVASCRIPT BOOTSTRAP -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>
