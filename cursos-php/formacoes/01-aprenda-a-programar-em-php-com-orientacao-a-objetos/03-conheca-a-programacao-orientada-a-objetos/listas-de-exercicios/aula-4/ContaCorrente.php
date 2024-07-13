<?php

class ContaCorrente extends ContaBancaria
{
    private const TAXA_SAQUE = 2.50;

    public function __construct($nome)
    {
        parent::__construct($nome);
    }

    public function cobrarTarifaMensal(): void
    {
        $valorTarifa = 3.00 / 100;
        $this->saldoEmCentavos -= $valorTarifa;
    }

    public function sacar(int $valor): int
    {
        $retorno = parent::sacar($valor);

        if ($retorno == 0) {
            return $retorno;
        }

        $this->saldoEmCentavos -= self::TAXA_SAQUE;

        return $retorno;
    }
}
