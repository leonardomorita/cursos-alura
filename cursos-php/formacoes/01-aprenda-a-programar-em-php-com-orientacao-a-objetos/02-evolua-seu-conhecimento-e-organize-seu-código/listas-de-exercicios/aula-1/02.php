<?php

// 2. Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro.

function imc(float $peso, float $altura): float
{
    return $peso / ($altura ** 2);
}

$imc = imc(90, 1.8);
var_dump($imc);
