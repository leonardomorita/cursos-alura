<?php

namespace ScreenMatch\Modelo;

use ScreenMatch\Excecoes\NotaInvalidaException;

trait ComAvaliacao
{
    private array $notas = [];

    /**
     * Salvar nota.
     * 
     * @throws NotaInvalidaException Se a nota for negativa ou maior do que 10.
     */
    public function avalia(float $nota): void
    {
        if ($nota < 0 || $nota > 10) {
            throw new NotaInvalidaException();
        }

        $this->notas[] = $nota;
    }

    public function mediaNota(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }
}
