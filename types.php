<?php

$xInt = 1;
$yInt = 2;

echo "<pre>";
var_dump(gettype($xInt)); //integer
var_dump(gettype($yInt)); //integer
var_dump(gettype($xInt / $yInt)); //double
////////////////////////////////////////////////////////////////////////////////////

class ExampleOfHeredoc
{
    public static $xxx = <<<EXAMPLE
example of heredoc in static var
EXAMPLE;

    public const XYZ = <<<KURLIK
example of heredoc in const 
KURLIK;
}

class ExampleOfNowdoc
{
    public static function myPrint()
    {
        $x = 'asdasdasd';

        return <<<'TTT'
only text. $x
TTT;
    }
}


var_dump(ExampleOfHeredoc::$xxx);
var_dump(ExampleOfHeredoc::XYZ);
var_dump(ExampleOfNowdoc::myPrint());
///////////////////////////////////////////////////////////////////////////////////////
$someStr = 'yobushkivorobushki';

/**
 * Negative numeric indices
 */
var_dump($someStr[-1]);

/**
 * Strings may also be accessed using braces
 */
var_dump($someStr{5});

///////////////////////////////////////////////////////////////////////////////////////

class TestObjToArr
{
    private $x = '234';
    protected $y = '767';
    public $a = '8888887';
}

$obj = new TestObjToArr();
var_dump((array)$obj);

///////////////////////////////////////////////////////////////////////////////////////


$sca = 'hello epta';
var_dump((object)$sca);

/**
 * object(stdClass)[2] public 'scalar' => int 123
 */

$obj = (object) array('1' => 'foo');
var_dump($obj->{'1'}); // true.  >= 7.2


///////////////////////////////////////////////////////////////////////////////////////

/**
 * Callbacks / Callables small examples
 **/

class A
{
    public function myParentMethod()
    {
        var_dump('black magic');
    }
}


class B extends A
{
    public function myParentMethod()
    {
        echo "<pre>";
        var_dump('white magic');
    }
}

$xxx = new B();
call_user_func([$xxx, 'parent::myParentMethod']);
















