<?php

// passage par référence 
function increment(&$var)
{
    $var++;

    return $var;
}
$a = 5;
increment($a);

function incrementBis($var)
{
    $var++;

    return $var;
}
$b = 5;
incrementBis($b);
