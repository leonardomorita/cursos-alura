<?php

require __DIR__ . '/src/Modelo/Avaliavel.php';
require __DIR__ . '/src/Modelo/Genero.php';
require __DIR__ . '/src/Modelo/Titulo.php';
require __DIR__ . '/src/Modelo/Episodio.php';
require __DIR__ . '/src/Modelo/Filme.php';
require __DIR__ . '/src/Modelo/Serie.php';
require __DIR__ . '/src/Calculos/CalculadoraDeMaratona.php';
require __DIR__ . '/src/Calculos/ConversorNotaEstrela.php';

echo 'Bem-vindo(a) ao Screen Match!' . PHP_EOL;

echo PHP_EOL;
var_dump("Filme");

$filme = new Filme('Thor - Ragnarok', 2021, Genero::SuperHeroi, 180);

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);

var_dump("Nome: $filme->nome");
var_dump("Ano do Lançamento: $filme->anoLancamento");
var_dump("Gênero: {$filme->genero->name}");
var_dump("Média de notas: {$filme->mediaNota()}");
var_dump("Duração do filme: {$filme->duracaoEmMinutos} minutos");

echo PHP_EOL;
var_dump("Série");

$serie = new Serie('Lost', 2007, Genero::Drama, 10, 20, 30);

$serie->avalia(10);
$serie->avalia(8);
$serie->avalia(7.2);
$serie->avalia(8.7);

var_dump("Nome: $serie->nome");
var_dump("Ano do Lançamento: $serie->anoLancamento");
var_dump("Gênero: {$serie->genero->name}");
var_dump("Média de notas: {$serie->mediaNota()}");
var_dump("Temporadas: {$serie->temporadas}");
var_dump("Episódios por temporadas: {$serie->episodiosPorTemporada}");
var_dump("Minutos por episódios: {$serie->minutosPorEpisodio} minutos");

$episodio1 = new Episodio($serie, 'Episódio 01', 1);

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);

var_dump("Para essa maratona, você precisa de {$calculadora->duracao()} minutos");

$conversor = new ConversorNotaEstrela();
var_dump($conversor->converte($serie));
