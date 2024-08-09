<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, Gerente};
use Alura\Banco\Service\ControladorDeBonificacoes;

$controladorDeBonificacoes = new ControladorDeBonificacoes();

$funcionarioUm = new Desenvolvedor('Funcionário Um', new CPF('123.456.789-10'), 'Desenvolvedor', 1000);
$funcionarioUm->sobeDeNivel();
$controladorDeBonificacoes->adicionaBonificacaoDe($funcionarioUm);


$funcionarioDois = new Gerente('Funcionário Dois', new CPF('123.456.789-11'), 'Gerente', 3000);
$controladorDeBonificacoes->adicionaBonificacaoDe($funcionarioDois);

$funcionarioTres = new Diretor('Funcionário Três', new CPF('123.456.789-12'), 'Diretor', 5000);
$controladorDeBonificacoes->adicionaBonificacaoDe($funcionarioTres);


var_dump($controladorDeBonificacoes->recuperaTotalBonificacao());
