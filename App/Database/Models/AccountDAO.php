<?php

require_once 'App/Métier/Account.php';
require_once 'App/Database/Connexion.php';
static $status;

class AccountDAO{

    public static $error;

    public static function registerAccount($name, $email, $password){
        $sql = "SELECT accountName FROM account where accountName = ?";
        $bdd = Connexion::executerRequete($sql, array($name));
        if($bdd->rowCount() < 1)
        {
            $sql = "INSERT INTO account(accountName, accountEmail, accountPassword, accountCreateAt) VALUES (?, ?, ?, ?)";
            $bdd = Connexion::executerRequete($sql, array($name, $email, $password, date("d/m/Y à H:i")));
            header("Location: /auth/connexion");
        }
        
    }

    public static function connexion($email, $password)
    {
        $sql = "SELECT accountID, accountName, accountEmail, accountPassword FROM account WHERE accountEmail = ? AND accountPassword = ?";
        $bdd = Connexion::executerRequete($sql, array($email, $password));
        if($bdd->rowCount() == 1)
        {
            $info = $bdd->fetch();
            $_SESSION['id'] =  $info['accountID'];
            $_SESSION['name'] =  $info['accountName'];
            $_SESSION['email'] =  $info['accountEmail'];
            header("Location: /");
        }
        else
            header("Location: /auth/erreur_login");
    }

}