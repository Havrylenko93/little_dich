<?php

trait SomeTrait
{
    public function ku()
    {
        echo 'hello from trait!' . PHP_EOL;
    }

    protected function testVisibility()
    {
        echo 'Do you want some encapsulation?' . PHP_EOL;
    }
}

trait TraitWithKuMethodToo
{
    public function ku()
    {
        echo 'hello from ANOTHER trait!' . PHP_EOL;
    }
}

class SomeParentClass
{
    use SomeTrait, TraitWithKuMethodToo {
        TraitWithKuMethodToo::ku insteadof SomeTrait;
    }
}

class SomeChildClass extends SomeParentClass
{
    use SomeTrait;

    public function ku()
    {
        echo 'hello from child class!' . PHP_EOL;
    }
}

class someMoreClass
{
    use SomeTrait {
        testVisibility as public;
    }
}

$parentObject = new SomeParentClass();
$childObject = new SomeChildClass();
$someObject = new someMoreClass();

$parentObject->ku();
$childObject->ku();
$someObject->testVisibility();


trait TraitWithAbstractMethod
{
    static public $x = 'asdasd'; //ok

    static public function staticMethodInTrait() //ok
    {
        echo 'staticMethodInTrait' . PHP_EOL;
    }

    public function somePrint()
    {
        echo 'Hello world' . PHP_EOL;
    }

    abstract public function GeniusGeniusGenius(); //ok
}

class SimpleClass
{
    use TraitWithAbstractMethod;

    /**
     * Fatal without implementation
     */
    public function GeniusGeniusGenius()
    {
        echo '===______===' . PHP_EOL;
    }
}

TraitWithAbstractMethod::staticMethodInTrait(); //ok
SimpleClass::staticMethodInTrait(); //ok