<?php

class Player{

    private $id;
    private $Name;
    private $UUID;
    private $coins;
    private $grade;
 
    /**
     * Constructeur de joueurs
     */
    public function __construct($id, $Name, $UUID, $coins, $grade)
    {
        $this->id = $id;
        $this->Name = $Name;
        $this->UUID = $UUID;
        $this->coins = $coins;
        $this->grade = $grade;
    }

    public function getPlayerID(){return $this->id;}
    public function getPlayerName(){return $this->Name;}
    public function getPlayerUUID(){return $this->UUID;}
    public function getCoins(){return $this->coins;}
    public function getGrade(){return $this->grade;}

    public function setPlayerID($id){$this->id = $id;}
    public function setPlayerName($Name){$this->Name = $Name;}
    public function setPlayerUUID($UUID){$this->UUID = $UUID;}
    public function setCoins($coins){$this->coins = $coins;}
    public function setGrade($grade){$this->grade = $grade;}
}