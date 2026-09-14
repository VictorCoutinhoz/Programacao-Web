<?php

$entrada = readline("digite um valor: ");

$comparacaoSolta = ($entrada == 10);
$comparacaoEstrita = ($entrada === 10);

echo "tipo: " . gettype($entrada) . "\n";

echo "== 10: ";
echo $comparacaoSolta ? "true\n" : "false\n";

echo "=== 10: ";
echo $comparacaoEstrita ? "true\n" : "false\n";