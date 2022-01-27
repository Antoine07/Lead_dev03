<?php

//    1 + 1 = 2, 1 + 2 = 3, 2 + 3 = 5 , ...
// 1 1 2 3 5 8 13 21

function fibo(int $max):int{
    // pour chaque appel on garde les valeurs des appels précédents dans une mémoire commune à la fonction
    static $a = 1, $b = 1, $count = 2; 
    
    if(abs($max) === 0) return 0;
    if(abs($max) <= 2) return 1;
    
    while($count < abs($max)){
        $count++;
        list($a, $b) = [$b, $a + $b];
        fibo($max);
    }

    return $b;
}

$rang = 0;
while($rang < 16){
    echo "rang: $rang", " " , fibo($rang);
    $rang++;
    echo "\n";
}