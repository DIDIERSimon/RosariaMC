<?php

require_once 'App/Database/PlayersDAO.php';
require_once 'App/Database/AccountDAO.php';

function accueil()
{
    require 'View/Accueil.php';
}

function registerationPage()
{
    require 'View/registeration/Registeration.php';
}
function registerSuccess()
{
    require 'View/registeration/registerSuccess.php';
}
function registerFailled()
{
    require 'View/registeration/registerFailled.php';
}

function registeringAccount($name, $email, $password)
{
    AccountDAO::registerAccount($name, $email, $password);
}

