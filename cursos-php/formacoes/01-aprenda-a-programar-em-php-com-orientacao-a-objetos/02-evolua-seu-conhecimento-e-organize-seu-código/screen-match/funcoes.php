<?php

function exibirMensagemLancamento(int $ano): void
{
    if ($ano > 2023) {
        echo "Esse filme é um lançamento." . PHP_EOL;
    } elseif ($ano > 2021 && $ano <= 2023) {
        echo "Esse filme ainda é novo." . PHP_EOL;
    } else {
        echo "Esse filme não é um lançamento." . PHP_EOL;
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool
{
    return $planoPrime || $anoLancamento < 2020;
}
