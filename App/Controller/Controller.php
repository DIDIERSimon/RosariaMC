<?php

require_once 'App/Database/PlayersDAO.php';

function accueil()
{
    $players = PlayersDAO::getPlayers();
    require 'View/Accueil.php';
}