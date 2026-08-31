<?php

$valor = (float) readline("valor da compra: ");

if ($valor <= 100) {
    $desconto = 0;
} elseif ($valor <= 300) {
    $desconto = $valor * 0.05;
} elseif ($valor <= 500) {
    $desconto = $valor * 0.10;
} else {
    $desconto = $valor * 0.15;
}

$total = $valor - $desconto;

echo "desconto: R$ $desconto\n";
echo "valor final: R$ $total\n";
