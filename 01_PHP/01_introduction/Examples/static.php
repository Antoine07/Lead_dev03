<?php

function increment_static()
{
    static $a = 0;
    echo $a;
    $a++;
}

increment_static();
increment_static();
increment_static();
increment_static();
increment_static();

echo PHP_EOL;