<?php

// 3 - Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) dependendo do horário encontrado em uma variável (inteiro representando as horas).

$horas = $argv[1] ?? 0;

if ($horas >= 6 && $horas <= 12) {
    var_dump('Bom dia');
} elseif ($horas > 12 && $horas <= 18) {
    var_dump('Boa tarde');
} else {
    var_dump('Boa noite');
}
