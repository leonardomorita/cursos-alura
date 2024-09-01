<?php

namespace Alura\Leilao\Service;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;

class Avaliador
{
    private float $maiorValor = 0;
    private float $menorValor = INF;
    private array $maioresLances;

    public function avalia(Leilao $leilao): void
    {
        $lances = $leilao->getLances();

        if (!count($lances)) return;

        usort($lances, function (Lance $lance1, Lance $lance2) {
            return $lance2->getValor() - $lance1->getValor();
        });

        $this->menorValor = $lances[count($lances) - 1]->getValor();
        $this->maiorValor = $lances[0]->getValor();
        $this->maioresLances = array_slice($lances, 0, 3);
    }

    public function getMaiorValor(): float
    {
        return $this->maiorValor;
    }

    public function getMenorValor(): float
    {
        return $this->menorValor;
    }

    /**
     * @return Lance[]
     */
    public function getMaioresLances(): array
    {
        return $this->maioresLances;
    }
}
