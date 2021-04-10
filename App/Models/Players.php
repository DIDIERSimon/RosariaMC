<?php

class Players{

    private $playerName;
    private $playerUUID;
    private $PlayerEmail;
    private $coins;
    private $grade;

    /**
     * Constructeur de joueurs
     */
    public function __construct($playerName, $playerUUID, $playerEmail, $coins, $grade)
    {
        $this->playerName = $playerName;
        $this->playerUUID = $playerUUID;
        $this->PlayerEmail = $playerEmail;
        $this->coins = $coins;
        $this->grade = $grade;
    }

    /**
     * Getters
     */
    public function getPlayerName(){return $this->playerName;}
    public function getPlayerUUID(){return $this->playerUUID;}
    public function getPlayerEmail(){return $this->PlayerEmail;}
    public function getCoins(){return $this->coins;}
    public function getGrade(){return $this->grade;}

    /**
     * Setters
     */
    public function setPlayerName($playerName){$this->playerName = $playerName;}
    public function setPlayerUUID($playerUUID){$this->playerUUID = $playerUUID;}
    public function setPlayerEmail($playerEmail){$this->playerEmail = $playerEmail;}
    public function setCoins($coins){$this->coins = $coins;}
    public function setGrade($grade){$this->grade = $grade;}
}