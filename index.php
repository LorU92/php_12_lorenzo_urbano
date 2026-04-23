<?php

require_once "class.php";

class Post {
    public $title;
    public $category;
    public $tags;

    public function __construct($_title, Category $_category, $_tags){
        $this->title = $_title;
        $this->category = $_category;
        $this->tags = $_tags;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getCategory(){
        return $this->category->getMyCategory();
    }

    public function getTags(){
        return $this->tags;
    }


    public function getPost(){
        echo "Il titolo del post è: " . $this->title . " " . $this->category->getMyCategory() . "i tags sono: " . $this->tags . "\n";
    }
    }

// ISTANZA

$post = new Post ("Vivere meglio", new Attualita(), "salute, cibo, sport.");
// echo $post->getTitle() ."\n";
// echo $post->getCategory() ."\n";
// echo $post->getTags() ."\n";

$post->getPost();


?>