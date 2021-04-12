<?php

require_once 'App/Database/PlayersDAO.php';
require_once 'App/Database/AccountDAO.php';

function accueil()
{
    require 'View/Main/Accueil.php';
}

//region d'enregistrement
function registerationPage()
{
    require 'View/Authentification/Registeration.php';
}
function registeringAccount($name, $email, $password)
{
    AccountDAO::registerAccount($name, $email, $password);
}
//fin region d'enregistrement

//region de connexion
function connexion()
{
    require 'View/Authentification/connection.php';
}
function connRequest($email, $password)
{
    AccountDAO::connexion($email, $password);
}
//fin region connexion

//region $_SESSION
function profile($pID)
{
    $sql = "SELECT a.accountID, a.accountName, a.accountEmail, a.accountRole, a.accountCreateAt, a.accountPB, r.RoleLibelle
        from account a
        join roles r
        on a.accountRole = r.RoleID
        where accountName = ?";
    $bdd = Connexion::executerRequete($sql, array($pID));
    $infoUser = $bdd->fetch();
    require 'View/Main/profil.php';
}

function disconnect()
{
    require 'View/Authentification/deconnexion.php';
}