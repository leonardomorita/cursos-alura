<?php

namespace Alura\Leilao\Service;

use Alura\Leilao\Model\Leilao;

class Avaliador
{
    private float $maiorValor = 0;
    private float $menorValor = INF;

    public function avalia(Leilao $leilao): void
    {
        foreach ($leilao->getLances() as $lance) {
            $valorLance = $lance->getValor();

            if ($valorLance > $this->maiorValor) {
                $this->maiorValor = $valorLance;
            }
            
            if ($valorLance < $this->menorValor) {
                $this->menorValor = $valorLance;
            }
        }
    }

    public function getMaiorValor(): float
    {
        return $this->maiorValor;
    }

    public function getMenorValor(): float
    {
        return $this->menorValor;
    }
}
