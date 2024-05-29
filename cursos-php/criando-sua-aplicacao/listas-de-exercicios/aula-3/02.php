<?php

// 2 - Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.

$peso = $argv[1] ?? 80.0;
$altura = $argv[2] ?? 1.8;
$imc = $peso / ($altura ** 2);

var_dump("IMC: $imc");

if ($imc < 16.9) {
    var_dump('Muito abaixo do peso');
} elseif ($imc >= 16.9 && $imc <= 18.4) {
    var_dump('Abaixo do peso');
} elseif ($imc > 18.4 && $imc <= 24.9) {
    var_dump('Peso normal');
} elseif ($imc > 24.9 && $imc <= 29.9) {
    var_dump('Acima do peso');
} elseif ($imc > 29.9 && $imc <= 34.9) {
    var_dump('Obesidade grau I');
} elseif ($imc > 34.9 && $imc <= 40) {
    var_dump('Obesidade grau II');
} else {
    // IMC > 40
    var_dump('Obesidade grau III');
}
