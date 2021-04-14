<?php
//ini_set('display_errors', 'off');
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
    require 'App/Controller/Controller.php';

$url = '';
if(isset($_GET['url'])){
    $url = explode('/', $_GET['url']);
}

if($url==""){
    accueil();
}

if(session_status() !== PHP_SESSION_ACTIVE){       //on vérifie si le client est authentifier
    if($url[0]=="profile" && $url[1]==$_GET[$url[1]])
    {
        profile($url[1]);
    }
}
else                                               //Si le client n'est pas authentifier, il est rediriger automatiquement vers la page d'accueil
    accueil();