<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{CPF, Pessoa};

abstract class Funcionario extends Pessoa
{
    protected float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function recebeAumento(float $valor): void
    {
        if ($valor < 0) {
            echo 'Valor precisa ser maior que zero.';
            return;
        }

        $this->salario += $valor;
    }

    abstract public function calculaBonificacao(): float;
}
