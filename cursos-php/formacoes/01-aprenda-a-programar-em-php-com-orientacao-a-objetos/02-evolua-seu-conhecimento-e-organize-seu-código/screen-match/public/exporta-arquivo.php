<?php

$filme = [
    'nome' => $_POST['nome'],
    'anoLancamento' => $_POST['ano'],
    'nota' => $_POST['nota'],
    'genero' => $_POST['genero']
];

file_put_contents(__DIR__ . '/filme.json', json_encode($filme));

// Redirecionar o usuário para uma determinada URL.
header('Location: /sucesso.php?filme=' . $filme['nome']);
