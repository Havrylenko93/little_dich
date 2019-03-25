<?php

// visibility modifiers for constants available from PHP 7.1
class First
{
    public const PI = 3.14;
    protected const Z = 'D';
    private const E = 'C';

    public function showPrivateConst()
    {
        echo PHP_EOL . self::E . PHP_EOL;
    }
}

class Second extends First
{
    public function showParentProtectedConst()
    {
        echo parent::Z . PHP_EOL;
    }
}

$firstObj = new First();
$secondObj = new Second();

echo First::PI; // ok
$firstObj->showPrivateConst(); // ok
$secondObj->showParentProtectedConst(); // ok
echo Second::Z; // fatal
echo Second::E; //fatal
