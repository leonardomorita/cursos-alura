<?php
$handle = fopen(__DIR__ . '/filme.json', 'r');
$filmeJson = fgets($handle);
fclose($handle);

$filme = json_decode($filmeJson, true);
?>
<h1>Sucesso! Filme <?= $_GET['filme']; ?> inserido.</h1>
<h2>Ano de Lançamento: <?= $filme['anoLancamento']; ?></h2>
<h2>Nota: <?= $filme['nota']; ?></h2>
<h2>Gênero: <?= $filme['genero']; ?></h2>
