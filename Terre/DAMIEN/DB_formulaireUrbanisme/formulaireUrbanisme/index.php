<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<?php
include("config_bdd.php");
?> 
<div id="contenu"></div>
<?php
    //requete de récupération de la 1ere ligne de la table
    $req = $connexion->query('SELECT * FROM notation_ville');

    //execution de cette requete dans une boucle pour récupérer chaque ligne
    while ($donnees = $req->fetch()){
        //enregistrement des données sous forme de variable
        $id_notation = $donnees['id_notation'];
        $ville = $donnees['ville'];
        $dechets = $donnees['dechets'];
        $pesticides = $donnees['pesticides'];
        $fleurs = $donnees['fleurs'];
        $code_postal = $donnees['code_postal'];

        //Affichage des données brutes
        // echo $id_notation;
        // echo $ville;
        // echo $dechets;
        // echo $pesticides;
        // echo $fleurs;
        // echo $code_postal;
        // echo '<br>';
    }
    $req = null; //termine le traitement de la requête REQ
?>
<br />

<a href="inserer.php" style="background-color:#d3ff76; color:black; padding:10px;">Noter une ville</a>

<?php
    //requete de récupétation de la 1ere ligne de la table
    $req = $connexion->query('SELECT*FROM notation_ville');

    //Construction du tableau
    echo '<table width="200" border ="2" style="margin-top:20px;"><tbody>
        <tr>
            <td><strong>Id</strong></td>
            <td><strong>Ville</strong></td>
            <td><strong>Dechets</strong></td>
            <td><strong>Pesticides</strong></td>
            <td><strong>Fleurs</strong></td>
            <td><strong>Code postal</strong></td>
        </tr>
    ';

    //Execution de cette requete dans une boucle pour récupérer chaque ligne
    while ($donnees =$req->fetch()){
        //enregistrement des données sous forme de variables

        $id_notation = $donnees['id_notation'];
        $ville = $donnees['ville'];
        $dechets = $donnees['dechets'];
        $pesticides = $donnees['pesticides'];
        $fleurs = $donnees['fleurs'];
        $code_postal = $donnees['code_postal'];

        //Affichage des données dans un tableau avec bouton maj
        echo ('
        
        <tr>
            <td style="text-align:center">' . $id_notation . '</td>
            <td style="text-align:center">' . $ville . '</td>
            <td style="text-align:center">' . $dechets . '</td>
            <td style="text-align:center">' . $pesticides . '</td>
            <td style="text-align:center">' . $fleurs . '</td>
            <td style="text-align:center">' . $code_postal . '</td>
            <td><a href=maj_news.php?id=' . $id_notation . ' style="background-color:#579109; color:#ffffff;">Mise à jour</a></td>
            <td><a href=sup_news.php?id=' . $id_notation . ' style="background-color:#e90c0c; color:#ffffff;">Suppression</a></td>
            ');
        echo '</tr>';

    }
    // Fin du tableau
    echo '</tbody> </table>';

    // Termine le traitement de la requete REQ
    $req = null;
    
?>
    <!-- <td>
        <form action="maj_news.php" method="post">
            <input name="id_maj" value='.$id_news.' type="hidden" />
            <input type="submit" name="maj" id="maj" value="Creer une news" />
        </form>
    </td> -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>