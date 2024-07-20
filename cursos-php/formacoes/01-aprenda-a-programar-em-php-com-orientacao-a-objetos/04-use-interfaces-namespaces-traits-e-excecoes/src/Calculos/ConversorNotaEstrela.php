<?php

namespace ScreenMatch\Calculos;

use DivisionByZeroError;
use ScreenMatch\Modelo\Avaliavel;
use Throwable;

class ConversorNotaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        try {
            $nota = $avaliavel->mediaNota();
    
            return round($nota) / 2;
        } catch (DivisionByZeroError $divisionByZeroError) {
            return 0;
        } catch (Throwable $throwable) {
            var_dump($throwable->getMessage());
            return 0;
        }
    }
}
