<?php

class Role{

    private $id;
    private $libelle;

    public function __construct($id, $libelle)
    {
        $this->id = $id;
        $this->libelle = $libelle;
    }

    public function getRoleID(){return $this->id;}
    public function getRoleLibelle(){return $this->libelle;}

    public function setRoleID($id){$this->id = $id;}
    public function setRoleLibelle($libelle){$this->libelle = $libelle;}

}