<?php

// 1. Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.

function operacaoMatematica(int $n1, int $n2, string $operacao): float|string
{
    $resultado = match ($operacao) {
        'somar' => $n1 + $n2,
        'subtrair' => $n1 - $n2,
        'multiplicar' => $n1 * $n2,
        'dividir' => $n2 > 0 ? $n1 / $n2 : "Erro: Divisão por zero",
        default => 'Operação não existe'
    };

    if (is_string($resultado)) {
        return $resultado;
    }

    return (float) $resultado;
}

$resultado = operacaoMatematica(1, 3, 'somaar');
var_dump($resultado);

$resultado = operacaoMatematica(1, 3, 'somar');
var_dump($resultado);

$resultado = operacaoMatematica(1, 3, 'subtrair');
var_dump($resultado);

$resultado = operacaoMatematica(1, 3, 'multiplicar');
var_dump($resultado);

$resultado = operacaoMatematica(1, 3, 'dividir');
var_dump($resultado);

$resultado = operacaoMatematica(1, 0, 'dividir');
var_dump($resultado);
