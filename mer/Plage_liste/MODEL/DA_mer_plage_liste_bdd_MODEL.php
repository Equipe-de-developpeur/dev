<!-- Page prenant en charge la connexion à la bdd, ainsi que la création -->

<?php

class DA_mer_plage_liste_bdd_MODEL
{
  public $serveur = 'localhost';
  public $loginsql = 'root';
  public $passsql = '';
  public $labase = 'var_nature';

  public function connexionserveur()
  {
    try {
      $connexion = new PDO("mysql:host=$this->serveur;charset=utf8", $this->loginsql, $this->passsql);

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
    $connexion = $this->connexionserveur();

    $bdd = "CREATE DATABASE IF NOT EXISTS $this->labase CHARACTER SET utf8 COLLATE utf8_general_ci";
    $connexion->exec($bdd);

    return $connexion;
  }

  public function connexionbdd()
  {
    // Connexion à la base
    try {
      $connexion = new PDO('mysql:host=' . $this->serveur . ';dbname=' . $this->labase . ';charset=utf8', $this->loginsql, $this->passsql);
      $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $connexion;
    }
    // Prise en charge des erreurs de connexion.
    catch (Exception $e) {
      die('Erreur :' . $e->getMessage());
    }
  }
}

?>