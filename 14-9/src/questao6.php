<?php

$entrada = readline("digite a nota: ");

if (!is_numeric($entrada) || $entrada < 0 || $entrada > 10) {
    echo "nota invalida, digite um numero entre 0 e 10\n";
} else {
    $nota = (float) $entrada;

    echo "nota registrada: $nota\n";
}