<?php

// 1. Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.

$notas = [10, 8.5, 7.5, 5, 9, 7, 3];

// rsort() => Função que ordena os elementos do array em ordem decrescente.
rsort($notas);

$tresMaioresNotas = [
    $notas[0],
    $notas[1],
    $notas[2]
];

var_dump($tresMaioresNotas);
