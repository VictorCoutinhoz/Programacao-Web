<?php

$valorUnitario = (float) readline("Digite o valor unitario do produto: ");
$quantidade = (int) readline("Digite a quantidade adquirida: ");

$valorTotal = $valorUnitario * $quantidade;

echo "Valor total da compra: $valorTotal\n";
