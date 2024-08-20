<?php

use Alura\Banco\Modelo\Endereco;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'autoload.php';

$endereco = new Endereco('Fazenda Rio Grande', 'Eucaliptos', 'Rua Amorinha', '123');
$endereco2 = new Endereco('Colombo', 'Atuba', 'Rua Senegália', '123');

$endereco->rua = 'TESTE';

echo $endereco;
