<?php
session_start();
ini_set('display_errors', 'off');
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
    //Auth Erreurs
    elseif($url[1]=="erreur_login"){
        erreur_login();
    }
}

//gestion de la partie Profil
elseif($url[0]=="profile"){
    if($url[1]==$_SESSION['name']){
        profile($_SESSION['name']);
    }
    elseif($url[1]==''){
        erreur_404();
    }
}


//Admin panel
elseif($url[0]=="admin"){
    if($url[1]=="home"){
        AdminHome($_SESSION['id']);
    }
}


