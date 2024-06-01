<?php

// 1 - Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como entrada e exiba o array resultante. Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5].

$resultado = [];
for ($i = 1; $i < $argc; $i++) {
    $resultado[] = $argv[$i];
}

if (count($resultado) == 0) {
    $resultado = [1, 2, 2, 3, 4, 4, 4, 5];
}

// array_unique() => função que remove valores duplicados do array.
$resultado = array_unique($resultado);
var_dump($resultado);
