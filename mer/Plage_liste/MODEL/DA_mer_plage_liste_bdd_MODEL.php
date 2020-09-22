<!-- Page prenant en charge la connexion à la bdd -->

<?php

class DA_mer_plage_liste_bdd_MODEL
{


  public function connexionbdd()
  {
    // Construction des variables de connexion serveur Mysql
    $serveur = 'localhost';
    $loginsql = 'root';
    $passsql = '';
    $labase = 'var_nature';

    // Connexion à la base
    try {
      $connexion = new PDO('mysql:host=' . $serveur . ';dbname=' . $labase . ';charset=utf8', $loginsql, $passsql);
      $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
      return $connexion;
      
    }
    // Prise en charge des erreurs de connexion.
    catch (Exception $e) {
      die('Erreur :' . $e->getMessage());
    }
  }


  public function creationbdd()
  {

    $connexion = $this->connexionbdd();

    $bdd = "CREATE DATABASE IF NOT EXISTS var_nature CHARACTER SET utf8 COLLATE utf8_general_ci";
    $connexion->exec($bdd);
  }
}

?>