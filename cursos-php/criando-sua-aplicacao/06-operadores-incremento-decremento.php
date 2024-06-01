<?php

$num = 5;
$resultado = ++$num; // num é incrementado para 6 e depois atribuído ao resultado
echo $num . PHP_EOL; // Exibe 6
echo $resultado . PHP_EOL; // Exibe 6

$num = 5;
$resultado = $num++; // $num é atribuído primeiramente à variável $resultado e depois incrementado para 6
echo $num . PHP_EOL; // Exibe 6
echo $resultado . PHP_EOL; // Exibe 5

