<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, EditorVideo, Gerente};
use Alura\Banco\Service\ControladorDeBonificacoes;

$funcionarioUm = new Desenvolvedor('Funcionário Um', new CPF('123.456.789-10'), 1000);
$funcionarioUm->sobeDeNivel();

$funcionarioDois = new Gerente('Funcionário Dois', new CPF('123.456.789-11'), 3000);
$funcionarioTres = new Diretor('Funcionário Três', new CPF('123.456.789-12'), 5000);
$funcionarioQuatro = new EditorVideo('Funcionário Quatro', new CPF('123.456.789-13'), 1500);

$controladorDeBonificacoes = new ControladorDeBonificacoes();

$controladorDeBonificacoes->adicionaBonificacaoDe($funcionarioUm);
$controladorDeBonificacoes->adicionaBonificacaoDe($funcionarioDois);
$controladorDeBonificacoes->adicionaBonificacaoDe($funcionarioTres);
$controladorDeBonificacoes->adicionaBonificacaoDe($funcionarioQuatro);

var_dump($controladorDeBonificacoes->recuperaTotalBonificacao());
