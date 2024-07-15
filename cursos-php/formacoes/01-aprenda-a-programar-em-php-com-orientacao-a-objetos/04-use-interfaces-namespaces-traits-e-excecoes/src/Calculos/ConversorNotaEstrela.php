<?php

class ConversorNotaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        $nota = $avaliavel->mediaNota();

        return round($nota) / 2;
    }
}
