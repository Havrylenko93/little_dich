<?php

class MyClosures
{
    public $someFunction;

    public function test()
    {
        $clos = function () {
            var_dump('I can use $this', $this);
        };

        $clos();
    }

    public function testStaticClosures()
    {
        echo 'I want fatality';
        $staticClosure = static function() {
            var_dump($this);
        };
        $staticClosure();
    }
}

$object = new MyClosures();
$object->test();

$object->someFunction = function () {
  var_dump('ku');
};

// $object->someFunction() - fatal. PHP tries to find "someFunction" named method
$x = $object->someFunction;
$x();