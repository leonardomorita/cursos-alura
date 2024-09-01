<?php

require_once 'vendor/autoload.php';

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;

/*
Padrões de programação para desenvolver um teste automatizado:
1. Arrange Act Assert: 
    Arrange: criar de um cenário para execução de um teste;
    Act: executar o código a ser testado;
    Assert: verificar se a saída é a esperada.
2. GivenWhenThen:
    Given:  dadas (given) algumas condições;
    When: quando (when) executados algo
    Then: então (then) esperamos que algo aconteça.
*/

// Arrange - Given / Preparamos o cenário do teste
$leilao = new Leilao('Fiat 147 0km');

$maria = new Usuario('Maria');
$joao = new Usuario('Joao');

$leilao->recebeLance(new Lance($joao, 2000));
$leilao->recebeLance(new Lance($maria, 2500));

$leiloeiro = new Avaliador();

// Act - When / Executamos o código a ser testado
$leiloeiro->avalia($leilao);

$maiorValor = $leiloeiro->getMaiorValor();

// Assert - Then / Verificamos se a saída é a esperada
$valorEsperado = 2500;

if ($maiorValor == $valorEsperado) {
    echo "TESTE OK";
} else {
    echo "TESTE FALHOU";
}
