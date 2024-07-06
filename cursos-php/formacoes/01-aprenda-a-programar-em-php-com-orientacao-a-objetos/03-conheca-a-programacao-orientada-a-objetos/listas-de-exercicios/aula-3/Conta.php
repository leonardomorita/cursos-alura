<?php

class Conta
{
    private int $saldoEmCentavos;

    public function __construct(
        public readonly string $nomeTitular,
        public readonly ContasBancarias $tipoConta
    )
    {
        $this->saldoEmCentavos = 0;
    }
    
    public function depositar(int $valorADepositar): void
    {
        if ($valorADepositar > 0) {
            $this->saldoEmCentavos += $valorADepositar;
        }
    }

    public function sacar(int $valorASacar): void
    {
        if ($valorASacar > 0 && $valorASacar < $this->saldoEmCentavos) {
            $this->saldoEmCentavos -= $valorASacar;
        }
    }
}
