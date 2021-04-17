<?php

class ShopProduct{

    private $id;
    private $type;
    private $name;
    private $price;

    public function __construct($id, $type, $name, $price)
    {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
        $this->price = $price;
    }

    public function getSPID(){return $this->id;}
    public function getSPType(){return $this->type;}
    public function getSPName(){return $this->name;}
    public function getSPPrice(){return $this->price;}

    public function setSPID($id){$this->id = $id;}
    public function setSPType($type){ $this->type = $type;}
    public function setSPName($name){$this->name = $name;}
    public function setSPPrice($price){$this->price = $price;}

}