<?php

list($a, $b, $c) = [1, 2, 3];

function permute(&$a, &$b, &$c): void
{
    list($a, $b, $c) = [3, 2, 1];
}

permute($a, $b, $c);

print_r("a : $a, b : $b, c : $c");

echo PHP_EOL;