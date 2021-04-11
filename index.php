<?php

    require('App/Controller/Controller.php');
    static $erreur;

    try
    {
        if(isset($_GET['action']))
        {
            //renvois un formulaire d'enregistrement
            if($_GET['action'] == 'enregistrement')
            {
                registerationPage();
            }
            //renvoi un formulaire d'authentification
            if($_GET['action'] == 'connexion')
            {
                connection();
            }
            if($_GET['action'] == 'profile')
            {
                
            }
        }
        else if(isset($_GET['profile']) AND $_GET['profile']>0)
        {
            $getID = intval($_GET['profile']);
            profile();
        }
        else if (isset($_GET['disconnection']))
        {
            disconnect();
        }
        else
            accueil();
    }
    catch (Exception $e)
    {
        echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
    }