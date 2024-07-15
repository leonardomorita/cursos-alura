<?php

abstract class Titulo implements Avaliavel
{
    private array $notas;

    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero
    ) {
        $this->notas = [];
    }

    #[Override]
    public function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    #[Override]
    public function mediaNota(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }

    abstract public function duracaoEmMinutos(): int;
}
