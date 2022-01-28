<?php

function bubble_sort(array $tab, callable $comp):array {
    for ($i = count($tab); $i > 0; $i--) {
        for ($j = 0; $j < ($i - 1); $j++) {
            if ( $comp($tab[$j], $tab[$j+1]) ) 
                list($tab[$j + 1], $tab[$j]) = [$tab[$j], $tab[$j + 1]];
        }
    }

    return $tab;
}

$asc = function(float $a, float $b):bool{
    return $a > $b ;
};

var_dump( bubble_sort(tab : [8,1, 0, 17,15, 2, 7, 12], comp: $asc) );

$desc = function(float $a, float $b):bool{
    return $a < $b ;
};

var_dump( bubble_sort(tab : [8,1, 0, 17,15, 2, 7, 12], comp: $desc) );