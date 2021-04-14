<?php

class Grade{

    private $id;
    private $libelle;

    public function __construct($id, $libelle)
    {
        $this->id = $id;
        $this->libelle = $libelle;
    }

    public function getGradeID(){return $this->id;}
    public function getGradeLibelle(){return $this->libelle;}

    public function setGradeID($id){$this->id = $id;}
    public function setGradeLibelle($libelle){$this->libelle = $libelle;}

}