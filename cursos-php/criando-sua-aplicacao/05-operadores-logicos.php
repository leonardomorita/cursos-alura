<?php

$a = true;
$b = false;
$comparacao = $a && $b;  // O resultado será o booleano *false*, já que $b é falso.

$a = true;
$b = false;
$comparacao = $a || $b; // O resultado será o booleano *true*, já que (pelo menos) o $a é verdadeiro.

$a = true;
$negacao = !$a; // O resultado será *false*
