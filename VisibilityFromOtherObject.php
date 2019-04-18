<?php


class VisibilityFromOtherObject
{
    private $thisIsPrivate;

    private function thisIsPrivateMethod()
    {
        echo 'ku-ku from private';
    }

    public function __construct($otherObject)
    {
        $this->thisIsPrivate = $otherObject;
    }

    public function dododo()
    {
        if ($this->thisIsPrivate instanceof VisibilityFromOtherObject) {
            $this->thisIsPrivate->thisIsPrivate='sad';
            var_dump($this->thisIsPrivate->thisIsPrivate);
            var_dump($this->thisIsPrivate);
        }
    }
}

$x = new VisibilityFromOtherObject('first object');
$x1 = new VisibilityFromOtherObject($x);
$x1->dododo();