<?php

// 1. Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha.

$filename = __DIR__ . '/teste.txt';

// fopen() => Função que abre o arquivo ou url.
$handle = fopen($filename, 'r');

// fgets() => Função que faz a leitura do arquivo linha a linha.
$firstLineContent = fgets($handle);

// fclose() => Função que fecha o ponteiro de arquivo aberto.
fclose($handle);

var_dump($firstLineContent);
