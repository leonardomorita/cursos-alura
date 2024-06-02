<?php

// 3. Crie uma função em PHP que converta graus celsius para Fahrenheit.

function converterCelsiusParaFahrenheit(float $celsius): float
{
    return ($celsius * 1.8) + 32;
}

$fahrenheit = converterCelsiusParaFahrenheit(0);
var_dump($fahrenheit);
