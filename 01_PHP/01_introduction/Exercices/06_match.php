<?php
/*
@author: Nathan & Bassam
*/

function fizzbuzz(): array
{
    $res = [];
    for ($int=1; $int <= 100; $int++) { 
        $res[] = match (true) {
            $int % 3 === 0 && $int % 5 === 0 => 'FizzBuzz',
            $int % 3 === 0 => 'Fizz',
            $int % 5 === 0 => 'Buzz',
            default => $int,
        };
    }
    
    return $res;
}