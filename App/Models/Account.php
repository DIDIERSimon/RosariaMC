<?php

class Account{

    private $id;
    private $accName;
    private $accEmail;
    private $accPassword;
    private $accPB;

    public function __construct($id, $accName, $accEmail, $accPassword, $accPB)
    {
        $this->id = $id;
        $this->accName = $accName;
        $this->accEmail = $accEmail;
        $this->accPassword = $accPassword;
        $this->accPB = $accPB;    
    }

    public function getID(){return $this->id;}
    public function getAccountName(){return $this->accName;}
    public function getAccountEmail(){return $this->accEmail;}
    public function getAccountPassword(){return $this->accPassword;}
    public function getAccountPB(){return $this->accPB;}

    public function setID($id){$this->id = $id;}
    public function setAccountName($accName){$this->accName = $accName;}
    public function setAccountEmail($accEmail){$this->accEmail = $accEmail;}
    public function setAccountPassword($accPassword){$this->accPassword = $accPassword;}
    public function setAccountPB($accPB){$this->accPB = $accPB;}
}