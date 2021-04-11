<?php

require_once 'App/Models/Account.php';
require_once 'App/Database/Connexion.php';
static $status;

class AccountDAO{

    public static $error;

    public static function registerAccount($name, $email, $password){
        $sql = "SELECT accountName FROM account where accountName = ?";
        $bdd = Connexion::executerRequete($sql, array($name));
        if($bdd->rowCount() < 1)
        {
            $sql = "INSERT INTO account(accountName, accountEmail, accountPassword) VALUES (?, ?, ?)";
            $bdd = Connexion::executerRequete($sql, array($name, $email, $password));
            header("Location: index.php?action=connection");
        }
        throw new Exception("Création du compte impossible.<br>2 possibilitées :<br>Vous ne vous êtes jamais connecté au serveur ou les informations que vous avez renseigné sont incorect.<br> <a href='index.php?action=registeration'>retour a l'enregistrement</a>");
    }

    public static function connexion($email, $password)
    {
        session_start();
        $sql = "SELECT accountID, accountName, accountEmail, accountPassword FROM account WHERE accountEmail = ? AND accountPassword = ?";
        $bdd = Connexion::executerRequete($sql, array($email, $password));
        if($bdd->rowCount() == 1)
        {
            $info = $bdd->fetch();
            $_SESSION['id'] =  $info['accountID'];
            $_SESSION['name'] =  $info['accountName'];
            $_SESSION['email'] =  $info['accountEmail'];
            header("Location: index.php");
        }
        else
            throw new Exception("Connexion impossible, compte inexistant ou mauvaises informations. <a href='index.php?action=connection'>Retour a la connexion</a>");
    }

}