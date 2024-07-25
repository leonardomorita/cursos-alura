<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'autoload.php';

use ScreenMatch\Calculos\ConversorNotaEstrela;
use ScreenMatch\Excecoes\NotaInvalidaException;
use ScreenMatch\Modelo\Episodio;
use ScreenMatch\Modelo\Serie;
use ScreenMatch\Modelo\Genero;

$serie = new Serie('Nome da série', 2024, Genero::Acao, 7, 20, 30);
$episodio1 = new Episodio($serie, 'Episódio 1', 1);

try {
    $episodio1->avalia(10);
    $episodio1->avalia(-1);
    
    $conversor = new ConversorNotaEstrela();
    var_dump($conversor->converte($episodio1));
} catch (NotaInvalidaException $notaInvalidaException) {
    var_dump("Aconteceu um problema: {$notaInvalidaException->getMessage()}");
}
