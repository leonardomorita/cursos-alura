<?php

enum ContasBancarias
{
    case ContaCorrente;
    case ContaInvestimento;
    case ContaPoupanca;
    case ContaUniversitaria;

    public function possuiTaxas(): bool
    {
        return match ($this) {
            ContasBancarias::ContaCorrente, ContasBancarias::ContaInvestimento => true,
            ContasBancarias::ContaPoupanca, ContasBancarias::ContaUniversitaria=> false,
        };
    }
}
