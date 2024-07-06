<?php

require __DIR__ . '/src/Modelo/Genero.php';
require __DIR__ . '/src/Modelo/Filme.php';

echo 'Bem-vindo(a) ao Screen Match!' . PHP_EOL;

$filme = new Filme('Thor - Ragnarok', 2021, Genero::SuperHeroi);

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);

var_dump("Nome: $filme->nome");
var_dump("Ano do Lançamento: $filme->anoLancamento");
var_dump("Gênero: {$filme->genero->name}");
var_dump("Média de notas: {$filme->mediaNota()}");
