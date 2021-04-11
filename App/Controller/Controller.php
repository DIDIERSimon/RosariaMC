<?php

require_once 'App/Database/PlayersDAO.php';
require_once 'App/Database/AccountDAO.php';

function accueil()
{
    require 'View/Accueil.php';
}

//region d'enregistrement
function registerationPage()
{
    require 'View/Registeration.php';
}
function registeringAccount($name, $email, $password)
{
    AccountDAO::registerAccount($name, $email, $password);
}
//fin region d'enregistrement

//region de connexion
function connection()
{
    require 'View/connection.php';
}
function connRequest($email, $password)
{
    AccountDAO::connexion($email, $password);
}
//fin region connexion

//region $_SESSION
function profile()
{
    require 'View/profil.php';
}

function disconnect()
{
    require 'View/deconnexion.php';
}