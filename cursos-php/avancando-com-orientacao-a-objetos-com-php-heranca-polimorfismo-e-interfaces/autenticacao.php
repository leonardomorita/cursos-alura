<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'autoload.php';

$autenticador = new Autenticador();
$diretor = new Diretor('Diretor', new CPF('123.456.789-10'), 10000);

$autenticador->tentaLogin($diretor, '1234');
