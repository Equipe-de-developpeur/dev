<!-- Page prenant en charge la connexion à la bdd -->

  <?php


  // Construction des variables de connexion serveur Mysql
  $serveur = 'localhost';
  $loginsql = 'root';
  $passsql = '';
  $labase = '';

  // Connexion au serveur 
  try {
    $connexion = new PDO('mysql:host=' . $serveur . ';dbname=' . $labase . ';charset=utf8', $loginsql, $passsql);

    $labase = 'var_nature';

    $bdd = "CREATE DATABASE IF NOT EXISTS $labase CHARACTER SET utf8 COLLATE utf8_general_ci";
    $connexion->exec($bdd);


    // Connexion à la base

    $connexion = new PDO('mysql:host=' . $serveur . ';dbname=' . $labase . ';charset=utf8', $loginsql, $passsql);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    include_once 'DA_mer_plage_liste_table.php';


    include_once 'DA_mer_plage_liste_complete.php';
  }

  // Prise en charge des erreurs de connexion.
  catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
  }
  ?>



