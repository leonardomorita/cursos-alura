<?php

require __DIR__ . '/funcoes.php';

echo 'Bem-vindo(a) ao Screen Match!' . PHP_EOL;

// $nomeFilme = 'Top Gun - Maverick';
$nomeFilme = 'Thor: Ragnarok';
// $nomeFilme = 'Se beber não case';

// $argv => Obtém todas entradas que forem passadas no terminal.
// $argc => contém o número de parâmetros passados na linha de comando.
// ?? => Operador coalescência nula. Se o valor que está à esquerda desse operador for nulo, o que vem à direita vai ser utilizado.
// $anoLancamento = $argv[1] ?? 2022;
$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;

$notas = [];
for ($i = 1; $i < $argc; $i++) {
    $notas[] = (float) $argv[$i];
}

// array_sum() => função para somar todos os valores dentro de um array
$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;
$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Filme: $nomeFilme" . PHP_EOL;
echo "Lançamento: $anoLancamento" . PHP_EOL;
echo "Nota: $notaFilme" . PHP_EOL;
echo "Incluso no Plano: " . var_export($incluidoNoPlano, true) . PHP_EOL;

exibirMensagemLancamento($anoLancamento);

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

var_dump($notas);
// sort() => Função do PHP que ordenar elementos do array. O segundo parâmetro seria qual ordem, e por padrão é ascendente.
sort($notas);
var_dump($notas);

// min() => Função do PHP que retorna o menor valor do array ou faz comparação do parâmetro 1 e 2.
$menorNota = min($notas);
var_dump($menorNota);

// strpos() => Função que retorna a posição da primeira ocorrência do termo que esteja procurando.
$posicaoDoisPontos = strpos($nomeFilme, ':');

// substr() => Função que retorna uma parte da string. Apenas para PHP 8.0+.
var_dump(substr($nomeFilme, 0, $posicaoDoisPontos));
