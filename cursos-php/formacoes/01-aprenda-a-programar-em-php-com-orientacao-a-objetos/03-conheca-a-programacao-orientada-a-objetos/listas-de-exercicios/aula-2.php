<?php

// Como podemos torná-lo um pouco mais robusto, impedindo que o saldo seja manipulado livremente, por exemplo? Altere o código da classe para que o saldo seja alterado somente através das operações de saque e depósito.

class Conta
{
    private int $saldoEmCentavos;
    private string $nomeTitular;
    private string $numeroConta;

    public function saque(float $valor): int
    {
        if ($valor <= 0) {
            var_dump('Erro: O valor do saque tem que ser maior do que zero.');
            return 0;
        }

        $valorEmCentavos = $valor * 100;

        if ($valorEmCentavos > $this->saldoEmCentavos) {
            var_dump('Erro: Saldo indisponível.');
            return 0;
        }

        $this->saldoEmCentavos -= $valorEmCentavos;
        var_dump("Foi sacado $valorEmCentavos centavos.");

        return $valorEmCentavos;
    }

    public function deposito(float $valor): void
    {
        if ($valor < 0) {
            var_dump('Erro: O valor de depósitop tem que ser maior do que zero.');
        }

        $valorEmCentavos = $valor * 100;
        $this->saldoEmCentavos += $valorEmCentavos;

        var_dump("Foi depositado $valorEmCentavos centavos.");
        var_dump('Saldo atual em centavos: ' . $this->saldoEmCentavos);
    }

    public function getSaldoEmCentavos(): int
    {
        return $this->saldoEmCentavos;
    }

    public function setNomeTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function setNumeroConta(int $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }
}
