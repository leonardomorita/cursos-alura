<?php

// 2. Escreva um programa em PHP que abra o arquivo teste.txt, acrescente a frase "PHP é incrível!" no final do arquivo e depois o feche.

$filename = __DIR__ . '/teste.txt';
$handle = fopen($filename, 'a');
fwrite($handle, 'PHP é incrível!' . PHP_EOL);
fclose($handle);
