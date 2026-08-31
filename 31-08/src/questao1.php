<?php

$distancia = (float) readline("distancia em km: ");

$taxaFixa = 3;
$valorKm = 10;

if ($distancia < 0) {
    echo "distancia invalida!\n";
} else {
    $total = ($taxaFixa + ($distancia * $valorKm));
    echo "valor da corrida: R$ $total\n";
}