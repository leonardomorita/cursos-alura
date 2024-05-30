<?php

// 2 - Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.
// Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.

$notas = [10, 5.5, 3.8, 7.5, 6, 6.1, 5.9];

foreach ($notas as $nota) {
    $resultado = $nota > 6 ? 'aprovado' : 'reprovado';

    var_dump("Esse(a) aluno(a) foi $resultado com a nota $nota.");
}
