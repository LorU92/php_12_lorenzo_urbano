<?php

abstract class Category{
    abstract public function getMyCategory();
}

class Attualita extends Category{
    public function getMyCategory() {
        return "La categoria è Attualità\n";
    }
}

class Sport extends Category{
    public function getMyCategory() {
        return "La categoria è Sport\n";
    }
}

class Gossip extends Category{
    public function getMyCategory() {
        return "La categoria è Gossip\n";
    }
}

class Storia extends Category{
    public function getMyCategory() {
        return "La categoria è Storia\n";
    }
}


// ISTANZA
// $attualita = new Attualita();
// $attualita->getMyCategory();






?>