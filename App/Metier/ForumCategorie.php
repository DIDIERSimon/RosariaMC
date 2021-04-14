<?php

class ForumCategorie{

    private $id;
    private $libelle;

    public function __construct($id, $libelle)
    {
        $this->id = $id;
        $this->libelle = $libelle;
    }

    public function getFCID(){return $this->id;}
    public function getFCLibelle(){return $this->libelle;}

    public function setFCID($id){$this->id = $id;}
    public function setFCLibelle($libelle){$this->libelle = $libelle;}

}