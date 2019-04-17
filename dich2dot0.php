<?php

$a = 2;
$b = 4;

/**
 * -1  if $a < $b
 * 1 if $a > $b
 * 0 if $a == $b
 * 0 if $a == $b
 */
echo $a <=> $b . nl2br(PHP_EOL);

$x1 = null;

$x2 = $x1 ?? '11111';

if (isset($x2)) {
    var_dump($x2);
}

$command = 'ls -la';
echo `{$command}`;
