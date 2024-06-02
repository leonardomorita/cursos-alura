<?php

// 2. Crie um programa em PHP que transforme a string “Vinicius Dias,1997,Programador” em um array em que cada item está separado por vírgulas.

$string = 'Vinicius Dias,1997,Programador';

// explode() => Função que dividi uma string por um termo passado e retorna um array de elementos separados.
$splitString = explode(',', $string);
var_dump($splitString);
