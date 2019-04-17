<?php

declare(strict_types=1);

interface ChristmasTreeInterface
{
    public function printTree(int $bottomSize): void;
}

class ChristmasTree implements ChristmasTreeInterface
{
    public function printTree(int $bottomSize): void
    {
        $levels =[];
        $iterations = ($bottomSize % 2 === 0) ? ($bottomSize/2) : (($bottomSize + 1) / 2);

        for (
            $i = 0, $j = $bottomSize;
            $i < $iterations;
            $j -= 2, $i++
        ) {
            $currentString = str_repeat('*', $j);

            if ($i !== 0) {
                $offset = (($bottomSize - $j) / 2);
                $currentString = str_repeat(' ', $offset) . $currentString . str_repeat(' ', $offset);
            }
            $levels[] = $currentString . PHP_EOL;
        }
        echo implode('', array_reverse($levels));
    }
}

$obj = new ChristmasTree();
$obj->printTree(47);

