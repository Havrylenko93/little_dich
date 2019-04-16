<?php

class Bitwise
{
    /**
     * @param $a
     * @param $b
     * @return int
     */
    protected function bitwiseAnd($a, $b)
    {
        return $a & $b;
    }

    /**
     * @param $a
     * @param $b
     * @return int
     */
    protected function bitwiseOr($a, $b)
    {
        return $a | $b;
    }

    /**
     * @param $a
     * @param $b
     * @return int
     */
    protected function bitwiseExclusiveOr($a, $b)
    {
        return $a ^ $b;
    }

    /**
     * @param $a
     * @return bool
     */
    protected function bitwiseNot($a)
    {
        return ~$a;
    }

    /**
     * @param $a
     * @param $b
     * @return int
     */
    protected function shiftLeft($a, $b)
    {
        return $a << $b;
    }

    protected function shiftRight($a, $b)
    {
        return $a >> $b;
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @throws Exception
     */
    public function __call($name, $arguments)
    {
        if (!method_exists($this, $name)) {
            throw new Exception('the most informative exception text');
        }

        return call_user_func_array([$this, $name], $arguments);
    }
}

class BitwisePrint
{
    /**
     * @param $data
     */
    public function decimalToBinaryPrint($data)
    {
        echo decbin($data) . nl2br(PHP_EOL);
    }

    /**
     * @param $data
     */
    public function binaryToDecimalPrint($data)
    {
        echo bindec($data) . nl2br(PHP_EOL);
    }
}

$bitwiseObj = new Bitwise();
$bitwisePrinter = new BitwisePrint();
$a = 4; // 100
$b = 7; // 111

$bitwisePrinter->decimalToBinaryPrint($bitwiseObj->bitwiseAnd($a, $b)); // 100
$bitwisePrinter->decimalToBinaryPrint($bitwiseObj->bitwiseOr($a, $b)); // 111
$bitwisePrinter->decimalToBinaryPrint($bitwiseObj->bitwiseExclusiveOr($a, $b)); // 011
$bitwisePrinter->decimalToBinaryPrint($bitwiseObj->bitwiseNot($a)); // 1111111111111111111111111111111111111111111111111111111111111011
$bitwisePrinter->decimalToBinaryPrint($bitwiseObj->shiftLeft($a, $b)); // 1000000000
$bitwisePrinter->decimalToBinaryPrint($bitwiseObj->shiftRight($a, $b)); // 0

