<?php

require_once 'App/Metier/Account.php';
require_once 'App/Database/Connexion.php';

class AccountDAO{

    /**Permet d'effectuer la connexion d'un compte sur le site
     *Récupère les information nécessaire à la connexion et a l'initialisation de la session
     *Si les valeurs renseigné sont correct, l'utilisateur se connecte à sa session et génère les variables de session ($_SESSION)
     *Si la validation est un succès, alors le joueur se retrouve connecter et rediriger vers la page d'acceuil
     *Si la validation est un échec, alors on lui renvoi vers une page d'erreur disans que le login est faux.
     */
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
            $erreur = "Impossible d'effectuer la connexion. Merci de vérifier vos informations";
            return $erreur;
            
    }

    /**Permet de créer un compte.
     * Récupère les information founis par le fomulaire.
     * Si les informations founis n'appartienne à aucun compte, alors la création du compte est enclancher.
     * Les informations sont rentrés dans la base de donnée avec,en plus des informations, la date de la création du compte.
     * Une fois l'enregistrement validé, l'utilisateur est renvoyer vers la page de connexion.
     */
    public static function setAccount($user, $email, $password)
    {
        date_default_timezone_set('Europe/Paris');
        $sql = "SELECT accountName, accountEmail FROM account where accountName = ? OR accountEmail = ?";
        $bdd = Connexion::executerRequete($sql, array($user, $email));
        if($bdd->rowCount() == 0)
        {
            $sql = "INSERT INTO account(accountName, accountEmail, accountPassword, accountCreateAt) VALUES (?, ?, ?, ?)";
            $bdd = Connexion::executerRequete($sql, array($user, $email, $password, date("d/m/Y à H:i")));
            header("Location: /auth/login");
        }
        else
            $erreur = "l'une des informations que vous nous avez fournis son indisponible.";
            return $erreur;
    }

    
    //Permet de compter le nombre de compte renseigné sur la base de donnée
    public static function countTAccount()
    {
        $sql = "SELECT COUNT(accountID) as accountT from account";
        $bdd = Connexion::executerRequete($sql);
        $tAccount = $bdd->fetch();
        return $tAccount;
    }

    //Permet la récupération de tous les comptes.
    public static function getAllAccount()
    {
        $sql = "SELECT accountID, accountName, accountEmail, accountRole, accountPassword, accountCreateAt, accountPB, rolelibelle
                FROM account JOIN roles on account.accountRole = roles.roleID
                ORDER BY accountID DESC LIMIT 10";
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
        //Ajouter une page d'erreur spé avec un msg d'erreur    
    }

    //Permet la récupération d'un compte spécifique par le pseudo renseigné dans l'url.
    public static function getAccountByName($name)
    {
        $sql = "SELECT accountID, accountName, accountEmail, accountRole, accountPassword, accountCreateAt, accountPB, roleLibelle
                FROM account JOIN roles on account.accountRole = roles.roleID
                WHERE accountName = ?";
        $result = Connexion::executerRequete($sql, array($name));
        if($result->rowCount() == 1)
        {
            $compte = $result->fetch();
            $leCompte = self::createAccount($compte);
            return $leCompte;
        }
        //Ajouter une page d'erreur spé avec un msg d'erreur
    }

    //Permet de créer un compte en format Objet (POO)
    private static function createAccount($pAcc)
    {
        $account = new Account($pAcc['accountID'], $pAcc['accountName'], $pAcc['accountEmail'], $pAcc['rolelibelle'], $pAcc['accountCreateAt'], $pAcc['accountPassword'], $pAcc['accountPB']);
        return $account;
    }

}