<?php

require_once 'App/Models/Account.php';
require_once 'App/Database/Connexion.php';
static $status;

class AccountDAO{

    public static function registerAccount($name, $email, $password){
        $sql = "SELECT accountName FROM account where accountName = '$name'";
        $bdd = Connexion::executerRequete($sql);
        if($bdd->rowCount() != 1)
        {
            $sql = "INSERT INTO account(accountName, accountEmail, accountPassword) VALUES ('$name', '$email', '$password')";
            $bdd = Connexion::executerRequete($sql);
        }
    }

}