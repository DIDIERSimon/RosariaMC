<?php

    require('App/Controller/Controller.php');
    static $erreur;

    try
    {
        if(isset($_GET['action']))
        {
            if($_GET['action'] == 'registeration')
            {
                registerationPage();
            }
        }
        else
            accueil();
    }
    catch (Exception $e)
    {
        echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
    }