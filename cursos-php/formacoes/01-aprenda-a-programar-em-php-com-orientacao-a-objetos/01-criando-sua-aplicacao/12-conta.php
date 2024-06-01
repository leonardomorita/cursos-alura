<?php

$conta = [
    'titular' => 'Leonardo Morita',
    'saldo' => 1000
];

echo '********************' . PHP_EOL;
echo 'Titular: ' . $conta['titular'] . PHP_EOL;
echo 'Saldo atual: R$ ' . $conta['saldo'] . PHP_EOL;
echo '********************' . PHP_EOL;

$entrada = 0;
do {
    echo '1. Consultar saldo atual' . PHP_EOL;
    echo '2. Sacar valor' . PHP_EOL;
    echo '3. Depositar valor' . PHP_EOL;
    echo '4. Sair' . PHP_EOL . PHP_EOL;

    echo 'Digite uma opção: ';
    $entrada = fgets(STDIN);

    switch ($entrada) {
        case 1:
            echo 'Saldo atual: R$ ' . $conta['saldo'] . PHP_EOL . PHP_EOL;
            break;
        case 2:
            echo 'Digite o valor: ';
            $valorSacar = (float) fgets(STDIN);

            if ($valorSacar <= 0) {
                echo 'O valor deve ser maior do que 0' . PHP_EOL . PHP_EOL;
                break;
            } elseif ($valorSacar > $conta['saldo']) {
                echo 'Saldo insuficiente' . PHP_EOL . PHP_EOL;
                break;
            }

            $conta['saldo'] -= $valorSacar;
            echo "Foi sacado R$ $valorSacar reais" . PHP_EOL . PHP_EOL;
            break;
        case 3:
            echo 'Digite o valor: ';
            $valorDepositar = (float) fgets(STDIN);

            if ($valorDepositar <= 0) {
                echo 'O valor deve ser maior do que 0' . PHP_EOL . PHP_EOL;
                break;
            }

            $conta['saldo'] += $valorDepositar;
            echo "Foi depositado R$ $valorDepositar reais" . PHP_EOL;
            echo 'Saldo atual: R$ ' . $conta['saldo'] . PHP_EOL . PHP_EOL;
            break;
        case 4:
            echo 'Programa encerrado' . PHP_EOL;
            break;
        default:
            echo 'Entrada desconhecida' . PHP_EOL . PHP_EOL;
            break;
    }
} while ($entrada != 4);
