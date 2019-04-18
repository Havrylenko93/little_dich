<?php

declare(strict_types=1);

interface PyramidInterface
{
    public function printPyramid(int $bottomSize = 21, string $symbolDraw = '*', $symbolRowEnd = PHP_EOL): void;
}

class Pyramid implements PyramidInterface
{
    public function printPyramid(int $bottomSize = 21, string $symbolDraw = '*', $symbolRowEnd = PHP_EOL): void
    {
        $levels = [];

        for (
            $i = 0, $j = $bottomSize, $iterations = $bottomSize / 2;
            $i < $iterations;
            $j -= 2, $i++
        ) {
            $currentString = str_repeat($symbolDraw, $j);

            if ($i !== 0) {
                $offset = (($bottomSize - $j) / 2);
                $currentString = str_repeat(' ', $offset) . $currentString . str_repeat(' ', $offset);
            }
            $levels[] = $currentString . $symbolRowEnd;
        }
        echo implode('', array_reverse($levels));
    }
}

$obj = new Pyramid();
$obj->printPyramid();

