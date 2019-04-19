<?php

class Magic
{
    private $x = 5;

    public function __get($name)
    {
        if (property_exists(self::class, $name)) {
            return 'it is private ' . ((string)$this->$name);
        } else {
            return 'ну и шо мы таки ищем?';
        }
    }
}

$n = new Magic();


var_dump($n->x);  //private
var_dump($n->qweqwex);  // not exist
