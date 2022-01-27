<?php

function zipper(array $tab1, array $tab2): array
{
    list($c1, $c2) = [count($tab1), count($tab2)];

    if ($c1 !== $c2) throw new LogicException(sprintf('vérifiez les dimension tab1 %s, table2 %s', $c1, $c2));

    $res = [];
    for ($i = 0; $i < $c1; $i++) $res[] = [$tab1[$i], $tab2[$i]];

    return $res;
}

print_r(zipper(tab1: [1, 2, 3], tab2: [4, 5, 6]));

echo PHP_EOL;
