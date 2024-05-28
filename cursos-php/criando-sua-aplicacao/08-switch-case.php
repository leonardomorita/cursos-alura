<?php

$dia = 3;

switch ($dia) {
    case 1:
        $nomeDia = "domingo";
        break;
    case 2:
        $nomeDia = "segunda-feira";
        break;
    case 3:
        $nomeDia = "terça-feira";
        break;
    case 4:
        $nomeDia = "quarta-feira";
        break;
    case 5:
        $nomeDia = "quinta-feira";
        break;
    case 6:
        $nomeDia = "sexta-feira";
        break;
    case 7:
        $nomeDia = "sábado";
        break;
    default:
        $nomeDia = "Dia inválido";
        break;
}

echo "O dia $dia é $nomeDia" . PHP_EOL;
