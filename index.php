<?php
//ini_set('display_errors', 'off');
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
    require 'App/Controller/Controller.php';

$url = '';
if(isset($_GET['url'])){
    $url = explode('/', $_GET['url']);
}
if($url==""){
    accueil();                                                  //Renvoi l'utilisateur a l'accueil
}


/**
 * Gestion de la partie authentification
 */
elseif($url[0]=="auth")
{
    if($url[1]=="login")                                        //Connexion du compte
    {
            Login();                                            
    }
    elseif($url[1]=="logout")                                   //Déconnexion du compte
    {   
        logout();
    }
    elseif($url[1]=="register")                                 //création du compte
    {
        register();
    }
}                      


//Fin région Authentification


/**
 * Gestion de la partie Administration
 */
elseif($url[0]=="admin" && $url[1]=="home")
{
    admin_home();
}




/*
elseif(session_status() === PHP_SESSION_ACTIVE)                 //on vérifie si le client est authentifier
{       
    if($url[0]=="profile" && $url[1]==$_GET[$url[1]])
    {
        profile($url[1]);
    }
}
else                                                            //Si le client n'est pas authentifier, il est rediriger automatiquement vers la page d'accueil
    accueil();*/