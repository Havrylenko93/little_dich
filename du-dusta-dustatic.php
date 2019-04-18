<?php

class StaticTest
{
    static public $statProp = 'make some noiZe';

    static public function someStaticMethod()
    {
        echo PHP_EOL . 'hello from static method' . PHP_EOL;
    }
}

$obj = new StaticTest();
echo $obj::$statProp; // can
$obj::someStaticMethod(); // can