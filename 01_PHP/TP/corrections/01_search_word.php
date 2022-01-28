<?php

// // 1. 
function search_pos_seq(array $content, array $seq): int | null
{

    $j = 0; // avancé sur la séquence
    $len = count($content);
    $lenSeq = count($seq);
    for ($i = 0; $i < $len; $i++) {

        if ( $j <  $lenSeq && $content[$i] === $seq[$j])
            $j += 1;
        else
            $j = 0;

        if ($j === $lenSeq)
            return $i - ($j - 1);
    }

    return null;
}

$content = [2, 1, 4, 2, 6, 1, 2, 7, 7, 1, 2, 3, 9];
$seq = [1, 2, 3];

echo search_pos_seq(content: $content, seq: $seq);

echo PHP_EOL;

die;

// // 2. 

$content = [2, 1, 4, 2, 6, 1, 2, 3, 7, 1, 2, 3, 7, 8, 1, 2, 3];

class Search
{
    public function __construct(
        public string | array $seq,
        public array $pos = []
    ) {
    }
}

function search_pos_seq_all(string | array  $content, string | array $seq): Search
{
    $search = new Search(seq: $seq);
    list($j, $pos) = [0, 0];
    $len = count($seq);

    // while (true) {
    //     $j = search_pos_seq(content: $content, seq: $seq);

    //     if (is_null($j)) break;
    //     $search->pos[] = $pos + $j;

    //     $content = array_slice($content, $j + $len);
    //     $pos += $j + $len;
    // }

    $lenContent = is_string($content) ? strlen($content) : count($content);

    for ($i = 0; $i < $lenContent; $i++) {

        $j = search_pos_seq(content: array_slice($content, $i + $j), seq: $seq);

        if (is_null($j) === false)
            $search->pos[] = $i + $j;

        $i = $i + $j;
    }

    return $search;
}

var_dump(search_pos_seq_all(content: $content, seq: $seq));

echo PHP_EOL;

// Recherche sur une chaine de caractères

$content = "bonjour tout les lead dev comment ça va ce matin";
$seq = "dev";

echo search_pos_seq(content: $content, seq: $seq);

echo PHP_EOL;