<?php

require_once 'App/Database/Connexion.php';
require_once 'App/Métier/Players.php';

class PlayersDAO{

    public static function getPlayers()
    {
        $sql = 'SELECT PlayerName, PlayerUUID, PlayerEmail, Coins, Grade FROM players order by PlayerName asc';
        $lesJoueurs = Connexion::executerRequete($sql);

        $players=array();
        foreach($lesJoueurs as $joueur)
        {
            $name = $joueur['PlayerName'];
            $players[$name]=self::creerJoueur($joueur);
        }
        if(!empty($players))
        {
            return $players;
        }
        else
        {
            throw new Exception("Sélection des joueurs impossible.");
        }
    }
    

    private static function creerJoueur($pJoueur)
    {
        $player = new Players($pJoueur['PlayerName'], $pJoueur['PlayerUUID'], $pJoueur['PlayerEmail'], $pJoueur['Coins'], $pJoueur['Grade']);
        return $player;
    }

}