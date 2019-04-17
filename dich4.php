<?php

class MyTest
{
    public function tttest(self $x)
    {
        var_dump($x);
    }

    public function printTreeParams($a, $b, $c)
    {
        var_dump($a, $b, $c);
    }
}
$z = new MyTest();
$b = new MyTest();
$z->tttest($b);

$resource = fopen('/var/www/html/little_dich/w.txt', 'r');

$arrayOfParams = [$resource, 55, (object)[11]];

$z->printTreeParams(...$arrayOfParams);

    