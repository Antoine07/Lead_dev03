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