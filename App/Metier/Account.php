<?php

class Account{  

    private $id;
    private $accName;
    private $accEmail;
    private $accRole;
    private $accCreatedAt;
    private $accPassword;
    private $accPB;

    public function __construct($id, $accName, $accEmail, $accRole, $accCreatedAt, $accPassword, $accPB)
    {
        $this->id = $id;
        $this->accName = $accName;
        $this->accEmail = $accEmail;
        $this->accRole = $accRole;
        $this->accCreatedAt = $accCreatedAt;
        $this->accPassword = $accPassword;
        $this->accPB = $accPB;    
    }

    public function getID(){return $this->id;}
    public function getAccountName(){return $this->accName;}
    public function getAccountEmail(){return $this->accEmail;}
    public function getAccountRole(){return $this->accRole;}
    public function getAccountCreatedAt(){return $this->accCreatedAt;}
    public function getAccountPassword(){return $this->accPassword;}
    public function getAccountPB(){return $this->accPB;}

    public function setID($id){$this->id = $id;}
    public function setAccountName($accName){$this->accName = $accName;}
    public function setAccountEmail($accEmail){$this->accEmail = $accEmail;}
    public function setAccountRole($accRole){$this->accRole = $accRole;}
    public function setAccountCreatedAt($accCreatedAt){$this->accCreatedAt = $accCreatedAt;}
    public function setAccountPassword($accPassword){$this->accPassword = $accPassword;}
    public function setAccountPB($accPB){$this->accPB = $accPB;}

}