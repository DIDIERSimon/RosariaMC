<?php

require_once 'App/Database/Connexion.php';
require_once 'App/Metier/Player.php';

class PlayerDAO{

    public static function getTPlayer()
    {
        $sql = "SELECT count(PlayerName) as tPlayer FROM players";
        $bdd = Connexion::executerRequete($sql);
        $tPlayers = $bdd->fetch();
        return $tPlayers;
    }

}