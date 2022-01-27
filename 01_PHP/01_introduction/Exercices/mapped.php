<?php

/*

mapped(numbers: ['x' => 1,'y' => 2,'z' => 3,'t' => 7], glue : ', ', symbol : "=");

*/

function mapped(array $numbers,  string $symbol, string $glue): string
{
    $str = [];
    foreach($numbers as $k => $v) $str[] = sprintf('%s%s%s', $k, $symbol, $v);

    return implode($glue, $str);
}
