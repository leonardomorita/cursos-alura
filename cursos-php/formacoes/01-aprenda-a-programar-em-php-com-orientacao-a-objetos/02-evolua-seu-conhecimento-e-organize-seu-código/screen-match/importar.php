<?php

// file_get_contents() => Função que lê o arquivo todo e retorna todo conteúdo em um valor string.
$conteudoArquivo = file_get_contents(__DIR__ . '/filme.json');

// json_decode() => Função que decodifica um valor JSON para um tipo que o PHP saiba manipular.
$conteudoDecodificado = json_decode($conteudoArquivo, true);

var_dump($conteudoArquivo);
var_dump($conteudoDecodificado);
