<?php

require_once 'App/Metier/Account.php';
require_once 'App/Database/Connexion.php';

class AccountDAO{

    public static function setLogin($user, $password)
    {
        $sql = "SELECT accountID, accountName, accountEmail, accountPassword
                FROM account
                WHERE accountEmail = ?
                AND accountPassword = ?";
        $bdd = Connexion::executerRequete($sql, array($user, $password));
        $result = $bdd->fetch();
        $login = $bdd->rowCount();
        if($login == 1)
        {
            $_SESSION['id'] = $result['accountID'];
            $_SESSION['name'] = $result['accountName'];
            $_SESSION['email'] = $result['accountEmail'];
            header('Location: /');
        }
        else
            throw new Exception ("Impossible de vous connecter. Avez vous enregistrer les bonnes informations ?");
    }

    public static function setAccount($user, $email, $password)
    {
        $sql = "SELECT accountName FROM account where accountName = ?";
        $bdd = Connexion::executerRequete($sql, array($user));
        if($bdd->rowCount() < 1)
        {
            $sql = "INSERT INTO account(accountName, accountEmail, accountPassword, accountCreateAt) VALUES (?, ?, ?, ?)";
            $bdd = Connexion::executerRequete($sql, array($user, $email, $password, date("d/m/Y à H:i")));
            header("Location: /auth/login");
        }
    }

    public static function countTAccount()
    {
        $sql = "SELECT COUNT(accountID) as accountT from account";
        $bdd = Connexion::executerRequete($sql);
        $tAccount = $bdd->fetch();
        return $tAccount;
    }

    public static function getAllAccount()
    {
        $sql = "SELECT accountID, accountName, accountEmail, accountRole, accountPassword, accountCreateAt, accountPB
                FROM account
                ORDER BY accountID DESC";
        $bdd = Connexion::executerRequete($sql);
        $lesComptes=array();
        foreach($bdd as $account)
        {
            $numero = $account['accountID'];
            $lesComptes[$numero] = self::createAccount($account);
        }
        if(!empty($lesComptes))
        {
            return $lesComptes;
        }
        else
            throw new Exception("Impossible de récupérer les comptes");
        
    }

    public static function getAccountByName($name)
    {
        $sql = "SELECT accountID, accountName, accountEmail, accountRole, accountPassword, accountCreateAt, accountPB
                FROM account
                WHERE accountName = ?";
        $result = Connexion::executerRequete($sql, array($name));
        if($result->rowCount() == 1)
        {
            $compte = $result->fetch();
            $leCompte = self::createAccount($compte);
            return $leCompte;
        }
    }

    private static function createAccount($pAcc)
    {
        $account = new Account($pAcc['accountID'], $pAcc['accountName'], $pAcc['accountEmail'], $pAcc['accountRole'], $pAcc['accountCreateAt'], $pAcc['accountPassword'], $pAcc['accountPB']);
        return $account;
    }

}