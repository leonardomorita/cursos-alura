<?php

echo 'Bem-vindo(a) ao Screen Match!' . PHP_EOL;

$nomeFilme = 'Top Gun - Maverick';
$anoLancamento = 2022;
$notaFilme = (9 + 6 + 8 + 7.5 + 5) / 5;
$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Filme: $nomeFilme" . PHP_EOL;
echo "Lançamento: $anoLancamento" . PHP_EOL;
echo "Nota: $notaFilme" . PHP_EOL;
echo "Incluso no Plano: " . var_export($incluidoNoPlano, true) . PHP_EOL;
