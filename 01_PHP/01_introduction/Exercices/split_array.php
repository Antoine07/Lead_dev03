<?php

// du premier au dernier
$numbers = [1,2,3];
array_shift($numbers);  // 1 [2,3]
array_shift($numbers);  // 2 [3]
array_shift($numbers);  // 3 []

// du dernier au premier
$numbers = [1,2,3];
array_pop($numbers);  // 1 [2,3]
array_pop($numbers);  // 2 [3]
array_pop($numbers);  // 3 []

function split_array(array $numbers, int $pos): array
{
    if ($pos > count($numbers)) return $numbers;

    list($start, $i) = [[], 0];

    while ($i++ <= $pos) 
        $start[] = array_shift($numbers); // $start[] <=> array_push

    return [$start, $numbers];
}

var_dump(split_array(numbers: [4,6,9, 17], pos: 2  ));