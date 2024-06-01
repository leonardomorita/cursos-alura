<?php

// 4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.
$ano = $argv[1] ?? 2024;
$ehAnoBissexto = var_export((($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0), true);
echo "Ano: $ano" . PHP_EOL;
echo "Bissexto: $ehAnoBissexto" . PHP_EOL;
