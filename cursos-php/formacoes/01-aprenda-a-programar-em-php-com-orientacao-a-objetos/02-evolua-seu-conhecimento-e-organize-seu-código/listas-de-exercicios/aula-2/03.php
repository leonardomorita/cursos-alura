<?php

// 3. Escreva uma função em PHP que receba um array de strings por parâmetro e o retorne ordenado em ordem alfabética.

function ordenarArrayDeStrings(array $string): array
{
    sort($string);
    return $string;
}

$array = [
    "JavaScript", "Python", "PHP", 'Java'
];

var_dump($array);
$array = ordenarArrayDeStrings($array);
var_dump($array);
