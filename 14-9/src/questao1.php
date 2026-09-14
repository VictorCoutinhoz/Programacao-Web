<?php

$numero1 = (int) readline("primeiro numero: ");
$numero2 = (int) readline("segundo numero: ");

if ($numero1 > $numero2) {
    echo "o primeiro numero e maior\n";
} elseif ($numero1 < $numero2) {
    echo "o segundo numero e maior\n";
} else {
    echo "os dois numeros sao iguais\n";
}