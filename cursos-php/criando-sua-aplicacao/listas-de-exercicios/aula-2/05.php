<?php

// 5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.

$celsius = $argv[1] ?? 0;
$fahrenheit = ($celsius * 1.8) + 32;

echo "Celsius: $celsius °C" . PHP_EOL;
echo "Fahrenheit: $fahrenheit °F" . PHP_EOL;
