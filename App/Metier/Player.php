<?php

class Player{

    private $Name;
    private $UUID;
    private $Email;
    private $coins;
    private $grade;

    /**
     * Constructeur de joueurs
     */
    public function __construct($Name, $UUID, $Email, $coins, $grade)
    {
        $this->playerName = $Name;
        $this->playerUUID = $UUID;
        $this->PlayerEmail = $Email;
        $this->coins = $coins;
        $this->grade = $grade;
    }

    /**
     * Getters
     */
    public function getPlayerName(){return $this->Name;}
    public function getPlayerUUID(){return $this->UUID;}
    public function getCoins(){return $this->coins;}
    public function getGrade(){return $this->grade;}

    /**
     * Setters
     */
    public function setPlayerName($Name){$this->playerName = $Name;}
    public function setPlayerUUID($UUID){$this->playerUUID = $UUID;}
    public function setCoins($coins){$this->coins = $coins;}
    public function setGrade($grade){$this->grade = $grade;}
}