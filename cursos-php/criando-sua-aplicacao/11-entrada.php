<?php

echo 'Digite um número: ';

// fgets() => função que pega uma string de um arquivo.
// STDIN => é uma constante que é um identificador do terminal.
$numero = (float) fgets(STDIN);
echo "O número é $numero." . PHP_EOL;
