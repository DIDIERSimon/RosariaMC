<?php
//ini_set('display_errors', 'off');
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
    require 'App/Controller/Controller.php';

$url = '';
if(isset($_GET['url'])){
    $url = explode('/', $_GET['url']);
}
if($url=="")
{
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
    else
        error404();
}                      


/**
 * Gestion de la partie Administration
 */
elseif($url[0]=="admin")
{
    if($url[1]=="home")                                         //Envoi à la page "Dashboard" du panel d'administration
    {
        admin_home();
    }
    elseif($url[1]=="shopManagement")
    {
        if(empty($url[2]))
        {
            shopManagement();
        }
        elseif($url[2]=="add")
        {
            addProduct();
        }
    }
    else
        error404();
    
}

/**
 * Gestion route Profil
 */
elseif($url[0]=="profil")
{
    if(!empty($url[1]))                                         //Envoi vers la page de profil du joueur renseigner dans l'url
    {
        $pseudo = $url[1];
        profil($pseudo);
    }
    else
    {
        error404();
    }
}

elseif($url[0]=="shop")
{
    if($url[1]=="home")
    {
        shop();
    }
    elseif($url[1]=="item")
    {
        if(!empty($url[2])){
            $id = $url[2];
            shopdesc($id);
        }
    }
}

/**
 * Gestion des erreurs
 */
elseif($url[0]=="error")                                        //Chemin pour que les DAO puisse renvoyer la page d'erreur sans passé par un include
{                                                               //qui laissera afficher la page précédente.
    if($url[1]=="404")
    {
        error404();
    }
}


else
    error404();                                                 //Retourne un page d'erreur si l'une des conditions renseigné plus haut n'est pas valide.