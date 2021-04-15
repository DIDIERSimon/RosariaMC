<?php

    require 'App/Database/Models/AccountDAO.php';
    require 'App/Database/Models/PlayerDAO.php';
    //require 'App/Database/Models/ForumDAO.php;
    //require 'App/Database/Models/ShopDAO.php;

/**
 * Fonction qui retourne la page d'accueil
 * Fonctionnalité à ajouter : Le message d'accueil (BDD)
 */
function accueil()
{
    require 'View/Main/Accueil.php';
}

//renvoi la page d'erreur
function error404()
{
    require_once 'View/template/errors/404.html';
}

//permet de se connecter a son compte
function login()
{
    if(isset($_POST['connexion']))
    {
        $email = htmlspecialchars(trim($_POST['accEmail']));
        $password = htmlspecialchars(trim($_POST['accPassword']));

        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $crypt = sha1($password);
            AccountDAO::setLogin($email, $crypt);
        }
        else
            $erreur = 'Veuillez entrer une adresse Email valide';
        
    }
    require 'View/Auth/connection.php';
}


//Permet la déconnexion de l'utilisateur
function logout()
{
    require 'View/Auth/deconnexion.php';
}

function register()
{
    if(isset($_POST['submit']))
    {
        $pseudo = htmlspecialchars(trim($_POST['accName']));
        $email = htmlspecialchars(trim($_POST['accEmail']));
        $password = htmlspecialchars(trim($_POST['accPassword']));
        $c_password = htmlspecialchars(trim($_POST['c_accPassword']));
        if(!empty($pseudo) && !empty($email) && !empty($password) && !empty($c_password))
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                if(strlen($password) >= 6)
                {
                    if($password == $c_password)
                    {
                        $password = sha1($password);
                        AccountDAO::setAccount($pseudo, $email, $password);
                    }
                    else
                        $erreur = 'Vos deux mots de passe ne sont pas identiques';
                }
                else
                $erreur = 'Votre mot de passe ne comporte pas assez de caractère.';
            }
            else
                $erreur = "Veuillez entrer une adresse mail valide !";
        }
        else
            $erreur = "Veuillez renseigner tout les champs !";
    }
    require 'View/Auth/Registeration.php';
}

function admin_home()
{
    $total_account = AccountDAO::countTAccount();
    $total_player = PlayerDAO::getTPlayer();
    //$total_topic = ForumDAO::getTTopic();
    //$total_achat = ShopDAO::getTAchat();
    $lesComptes = AccountDAO::getAllAccount();
    require 'View/Admin/Panel_home.php';
}