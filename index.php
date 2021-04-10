<?php

    require('App/Controller/Controller.php');

    try
    {
        accueil();
    }
    catch (Exception $e)
    {
        echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
    }