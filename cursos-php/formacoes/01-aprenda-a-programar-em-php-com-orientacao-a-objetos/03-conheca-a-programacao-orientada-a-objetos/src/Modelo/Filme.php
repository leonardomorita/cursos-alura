<?php

class Filme
{
    public string $nome;
    public int $anoLancamento;
    public string $genero;
    public array $notas = [];

    function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    function mediaNota(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }
}
