<?php

require_once 'App/Database/Connexion.php';
require_once 'App/Metier/Player.php';

class PlayerDAO{

    //Permet la récupération d'un profil via le pseudo (SQL: Player) 
    public static function getProfil($name)
    {
        $sql = "SELECT PlayerID, PlayerName, PlayerUUID, Coins, GradeLibelle
                FROM players join grades on players.gradeID = grades.gradeID
                Where PlayerName = ?";
        $result = Connexion::executerRequete($sql, array($name));
        if($result->rowCount() == 1 ){
            $ligne = $result->fetch();
            $lProfil = self::createPlayer($ligne);
            return $lProfil;
        }
        else
            header("Location: /error/404");
    }

    //Permet d'obtenir le nombre de joueur s'étant connecter sur le serveur au moins une fois
    public static function getTPlayer()
    {
        $sql = "SELECT count(PlayerName) as tPlayer FROM players";
        $bdd = Connexion::executerRequete($sql);
        $tPlayers = $bdd->fetch();
        return $tPlayers;
    }

    //Permet de créer un joueur en format Objet (POO)
    private static function createPlayer($pPlayer)
    {
        $player = new Player($pPlayer['PlayerID'], $pPlayer['PlayerName'], $pPlayer['PlayerUUID'], $pPlayer['Coins'], $pPlayer['GradeLibelle']);
        return $player;
    }
    

}