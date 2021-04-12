<?php
session_start();
    require 'App/Controller/Controller.php';

$url = '';
if(isset($_GET['url'])){
    $url = explode('/', $_GET['url']);
}

if($url == "")
{
    accueil();
}

//gestion de la partie Authentification
elseif($url[0]=="auth")
{
    if($url[1]=="connexion")
    {
        connexion();
    }
    elseif($url[1]=="enregistrement")
    {
        registerationPage();
    }
    elseif($url[1]=="deconnexion"){
        disconnect();
    }
}

//gestion de la partie Profil
elseif($url[0]=="profile"){
    if($url[1]==$_SESSION['name']){
        profile();
    }
}