<?php

namespace Alura\Banco\Modelo;

/**
 * Class Pessoa
 * 
 * @package Alura\Banco\Modelo
 * 
 * @property-read string $nome
 * @property-read CPF $cpf
 */
abstract class Pessoa
{
    use AcessoPropriedade;

    private $nome;
    private $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    final protected function validaNome(string $nome): void
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}
