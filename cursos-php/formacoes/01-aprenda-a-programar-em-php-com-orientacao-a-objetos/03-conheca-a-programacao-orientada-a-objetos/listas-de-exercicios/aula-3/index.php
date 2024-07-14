<?php

require_once './ContasBancarias.php';
require_once './Conta.php';

$contaCorrente = new Conta('Conta Corrente Um', ContasBancarias::ContaCorrente);
$contaInvestimento = new Conta('Conta Investimento Um', ContasBancarias::ContaInvestimento);
$contaPoupanca = new Conta('Conta Poupança Um', ContasBancarias::ContaPoupanca);
$contaUniversitaria = new Conta('Conta Universitária Um', ContasBancarias::ContaUniversitaria);

var_dump("Conta corrente possui taxas? " . var_export($contaCorrente->tipoConta->possuiTaxas(), true));
var_dump("Conta investimento possui taxas? " . var_export($contaInvestimento->tipoConta->possuiTaxas(), true));
var_dump("Conta poupança possui taxas? " . var_export($contaPoupanca->tipoConta->possuiTaxas(), true));
var_dump("Conta universitária possui taxas? " . var_export($contaUniversitaria->tipoConta->possuiTaxas(), true));
