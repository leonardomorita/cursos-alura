<?php

// 3. Crie um programa que converta a string '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}' em um objeto.

$string = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';
$stringDecode = json_decode($string);
var_dump($stringDecode);
