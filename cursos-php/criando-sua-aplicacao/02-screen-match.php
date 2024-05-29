<?php

echo 'Bem-vindo(a) ao Screen Match!' . PHP_EOL;

$nomeFilme = 'Top Gun - Maverick';
$nomeFilme = 'Thor: Ragnarok';
$nomeFilme = 'Se beber não case';

// $argv => Obtém todas entradas que forem passadas no terminal.
// $argc => contém o número de parâmetros passados na linha de comando.
// ?? => Operador coalescência nula. Se o valor que está à esquerda desse operador for nulo, o que vem à direita vai ser utilizado.
// $anoLancamento = $argv[1] ?? 2022;
$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$somaDeNotas = 0;

for ($i = 1; $i < $argc; $i++) {
    $somaDeNotas += $argv[$i];
}

$notaFilme = $somaDeNotas / $quantidadeDeNotas;
$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Filme: $nomeFilme" . PHP_EOL;
echo "Lançamento: $anoLancamento" . PHP_EOL;
echo "Nota: $notaFilme" . PHP_EOL;
echo "Incluso no Plano: " . var_export($incluidoNoPlano, true) . PHP_EOL;

if ($anoLancamento > 2023) {
    echo "Esse filme é um lançamento." . PHP_EOL;
} elseif ($anoLancamento > 2021 && $anoLancamento <= 2023) {
    echo "Esse filme ainda é novo." . PHP_EOL;
} else {
    echo "Esse filme não é um lançamento." . PHP_EOL;
}

// Uma expressão é tudo que depois de processado torna-se um valor que pode ser atribuído à uma variável.
// Um ponto e vírgula sempre marca o final de uma expressão.
// match é uma expressão (match expression).
$genero = match ($nomeFilme) {
    'Top Gun - Maverick' => 'ação',
    'Thor: Ragnarok' => 'super-herói',
    'Se beber não case' => 'comédia',
    default => 'desconhecido'
};

echo "O gênero do filme é: $genero" . PHP_EOL;
