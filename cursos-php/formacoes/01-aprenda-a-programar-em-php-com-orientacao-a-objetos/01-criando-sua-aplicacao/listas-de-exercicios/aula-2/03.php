<?php

// 3 - Elabore um programa em PHP que receba um valor em metros e converta para centímetros.

$metros = $argv[1] ?? 1;
$metrosParaCentimetros = $metros * 100;
echo "Metro(s): $metros" . PHP_EOL;
echo "Centímetro(s): $metrosParaCentimetros" . PHP_EOL;
