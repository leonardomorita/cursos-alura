<?php

$numero1 = $argv[1] ?? 1;
$numero2 = $argv[2] ?? 2;

$mensagem1 = 'O número 1 é maior do que o 2.';
$mensagem2 = 'O número 2 é maior do que o 1.';

// ?: => operador ternário.
$resultado = $numero1 > $numero2 ? $mensagem1 : $mensagem2;

var_dump($resultado);
