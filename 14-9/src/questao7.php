<?php

$matricula1 = readline("primeira matricula: ");
$matricula2 = readline("segunda matricula: ");

$comparacaoTexto = strcmp($matricula1, $matricula2);

if ($comparacaoTexto < 0) {
    echo "como texto: $matricula1 vem primeiro\n";
} elseif ($comparacaoTexto > 0) {
    echo "como texto: $matricula2 vem primeiro\n";
} else {
    echo "como texto: sao iguais\n";
}

if ($matricula1 < $matricula2) {
    echo "com <: $matricula1 vem primeiro\n";
} elseif ($matricula2 < $matricula1) {
    echo "com <: $matricula2 vem primeiro\n";
} else {
    echo "com <: sao iguais\n";
}