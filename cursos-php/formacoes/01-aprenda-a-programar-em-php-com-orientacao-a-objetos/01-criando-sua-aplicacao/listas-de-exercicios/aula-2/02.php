<?php

// 2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado.
$nota1 = $argv[1] ?? 8;
$nota2 = $argv[2] ?? 7.8;
$nota3 = $argv[3] ?? 9;
$somaNotas = $nota1 + $nota2 + $nota3;
$mediaNotas = $somaNotas / 3;
echo "Média: $mediaNotas" . PHP_EOL;
