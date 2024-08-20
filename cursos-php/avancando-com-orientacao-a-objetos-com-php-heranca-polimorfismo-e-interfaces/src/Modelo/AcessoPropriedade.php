<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedade
{
    public function __get(string $nomeAtributo)
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}
