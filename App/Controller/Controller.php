<?php

/**
 * Fonction qui retourne la page d'accueil
 * Fonctionnalité à ajouter : Le message d'accueil (BDD)
 * 
 */
function accueil()
{
    require 'View/Main/Accueil.php';
}

function error404()
{
    require_once 'View/template/errors/404.html';
}

function profile($user)
{
    
    require 'View/Main/profil.php';
}