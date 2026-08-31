<?php

$valor = (float) readline("valor da compra: ");

if ($valor <= 50) {
    $frete = 15;
} elseif ($valor <= 100) {
    $frete = 10;
} else {
    $frete = 0;
}

$total = $valor + $frete;

echo "valor do frete: R$ $frete\n";
echo "valor total: R$ $total\n";
