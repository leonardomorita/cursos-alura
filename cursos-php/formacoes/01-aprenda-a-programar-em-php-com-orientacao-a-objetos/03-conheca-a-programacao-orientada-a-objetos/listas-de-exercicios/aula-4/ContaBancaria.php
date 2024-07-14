<?php

class ContaBancaria
{
    protected $saldoEmCentavos;

    public function __construct(
        public readonly string $nome
    )
    {
        $this->saldoEmCentavos = 0;
    }

    public function depositar(int $valor): void
    {
        if ($valor <= 0) {
            echo "O valor precisa ser maior do que 0.\n";
            return;
        }

        $this->saldoEmCentavos += $valor;
    }

    public function sacar(int $valor): int
    {
        if ($valor <= 0) {
            echo "O valor precisa ser maior do que 0.\n";
            return 0;
        } elseif ($valor > $this->saldoEmCentavos) {
            echo "Saldo insuficiente.\n";
            return 0;
        }

        $this->saldoEmCentavos -= $valor;
        return $valor;
    }

    public function consultaSaldo(): int
    {
        return $this->saldoEmCentavos;
    }
}
