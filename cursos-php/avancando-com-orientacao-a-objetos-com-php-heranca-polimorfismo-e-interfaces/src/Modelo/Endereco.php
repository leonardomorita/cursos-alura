<?php

namespace Alura\Banco\Modelo;

/**
 * Classe Endereço.
 * 
 * @package Alura\Banco\Modelo
 * 
 * @property string $cidade
 * @property string $bairro
 * @property string $rua
 * @property string $numero
 */
final class Endereco
{
    use AcessoPropriedade;

    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    public function __set(string $nomeAtributo, $valor)
    {
        $this->$nomeAtributo = $valor;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }
}
