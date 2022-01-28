<?php

$numbers = [1, 2, 3];
function my_reduce(array | object $numbers, callable $f, int $initial = 0)
{
    $acc = $initial;
    foreach ($numbers as $number) {
        $acc = $f($number, $acc);
    }

    return $acc;
}

$sum = function ($curr, $acc) {
    return $acc + $curr;
};
echo my_reduce($numbers, $sum);

echo PHP_EOL; // saut de ligne

$f = function ($acc, $curr) {
    return "f($acc,$curr)";
};

echo my_reduce($numbers, $f);
echo PHP_EOL; // saut de ligne


// Partie 2 Hydrate
$products = [['milk', 3, 3], ['butter', 2.5, 2], ['eggs', .7, 10]];
$hydrate =  function () use ($products) {
    $o = [];
    foreach ($products as [$name, $price, $quantity]) {
        $o[] = new class($price, $quantity)
        {
            public function __construct(
                public float $price,
                public float $quantity
            ) {
            }
        };
    }

    return $o;
};

$sumProduct = function ($curr, $acc) {
     return abs($curr->price*$curr->quantity + $acc);
};

echo my_reduce($hydrate(), $sumProduct, 0); // 21
echo PHP_EOL; // saut de ligne
