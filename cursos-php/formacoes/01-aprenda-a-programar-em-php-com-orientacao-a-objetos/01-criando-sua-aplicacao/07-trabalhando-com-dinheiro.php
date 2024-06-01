<?php

ini_set('precision', 17);

$a = new Decimal\Decimal('0.1');
$b = new Decimal\Decimal('0.2');
var_dump($a + $b);
