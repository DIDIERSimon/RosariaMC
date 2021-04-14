<?php

class Forum{

    private $id;
    private $name;
    private $content;
    private $author;
    private $categorie;

    public function __construct($id, $name, $content, $author, $categorie)
    {
        $this->id = $id;
        $this->name = $name;
        $this->content = $content;
        $this->author = $author;
        $this->categorie = $categorie;
    }

    public function getTopicID(){return $this->id;}
    public function getTopicName(){return $this->name;}
    public function getTopicContent(){return $this->content;}
    public function getTopicAuthor(){return $this->author;}
    public function getTopicCategorie(){return $this->categorie;}

    public function setTopicID($id){$this->id = $id;}
    public function setTopicName($name){$this->name = $name;}
    public function setTopicContent($content){$this->content = $content;}
    public function setTopicAuthor($author){$this->author = $author;}
    public function setTopicCategorie($categorie){$this->categorie = $categorie;}

}