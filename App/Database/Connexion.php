<?php

class Connexion{
    
    private static $bdd;

    private  static function getBdd() {
        if (self::$bdd == null) {
          // Création de la connexion
          self::$bdd = new PDO('mysql:host=localhost;dbname=minecraft;charset=utf8',
            'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return self::$bdd;
      }

      public static function executerRequete($sql, $params = null) {
        if ($params == null) {
          $resultat = self::getBdd()->query($sql);    // exécution directe
        }
        else {
          $resultat = self::getBdd()->prepare($sql);  // requête préparée
          $resultat->execute($params);
        }
        return $resultat;
      }
}