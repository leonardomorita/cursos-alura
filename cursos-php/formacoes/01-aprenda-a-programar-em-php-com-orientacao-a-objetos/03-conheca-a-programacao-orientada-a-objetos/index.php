<?php

require __DIR__ . '/src/Modelo/Filme.php';

echo 'Bem-vindo(a) ao Screen Match!' . PHP_EOL;

$filme = new Filme();
$filme->nome = 'Thor - Ragnarok';
$filme->anoLancamento = 2021;
$filme->genero = 'super-heroi';

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);

var_dump($filme);
var_dump('Média de notas: ' . $filme->mediaNota());
