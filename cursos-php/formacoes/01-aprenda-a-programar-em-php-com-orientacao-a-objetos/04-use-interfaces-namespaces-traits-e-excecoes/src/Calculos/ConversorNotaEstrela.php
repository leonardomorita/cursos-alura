<?php

namespace ScreenMatch\Calculos;

use DivisionByZeroError;
use ScreenMatch\Modelo\Avaliavel;

class ConversorNotaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        try {
            $nota = $avaliavel->mediaNota();
    
            return round($nota) / 2;
        } catch (DivisionByZeroError $divisionByZeroError) {
            return 0;
        }
    }
}
