<?php

require_once 'App/Metier/Account.php';
require_once 'App/Database/Connexion.php';

class AccountDAO{

    public static function getAllAccount()
    {
        $sql = "SELECT accountID, accountName, accountEmail, accountRole, accountPassword, accountCreateAt, accountPB
                FROM account
                ORDER BY accountID asc";
        $exec = Connexion::executerRequete($sql);
        $accounts = $exec->fetchAll();
    }

}