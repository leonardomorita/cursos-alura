<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return 500;
    }

    public function sobeDeNivel(): void
    {
        $this->recebeAumento($this->salario * 0.75);
    }
}
