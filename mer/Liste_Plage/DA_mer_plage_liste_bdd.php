<!-- Page prenant en charge la connexion à la bdd -->

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste Plage</title>
</head>

<body>

  <?php
  // Construction des variables de connexion serveur Mysql
  $serveur = 'localhost';
  $loginsql = 'root';
  $passsql = 'root';
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

    // Création de la table liste_plage dans la base var_nature

    $nom_table = 'liste_plage';

    $table = "CREATE TABLE IF NOT EXISTS $nom_table (
      liste_plage_id INT PRIMARY KEY AUTO_INCREMENT,
      lieux VARCHAR(50) NOT NULL,
      villes VARCHAR(50) NOT NULL,
      liens VARCHAR(300),
      distances VARCHAR(10),
      actions VARCHAR(500),
      note_moyenne VARCHAR(50) NOT NULL,
      votre_avis VARCHAR(50) NOT NULL
  )";


  $connexion->exec($table);


 include_once 'DA_mer_plage_liste_complete.php';

 $connexion->exec($insert);

  }

  // Prise en charge des erreurs de connexion.
  catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
  }
  ?>




</body>

</html>