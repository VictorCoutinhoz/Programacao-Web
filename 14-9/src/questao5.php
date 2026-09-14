<?php

$nome = readline("nome do aluno: ");

$nota1 = (float) readline("nota 1: ");
$nota2 = (float) readline("nota 2: ");
$nota3 = (float) readline("nota 3: ");

$media = ($nota1 + $nota2 + $nota3) / 3;

$aprovado = $media >= 7;
$recuperacao = ($media >= 5 && $media < 7);

echo "aluno: $nome\n";
echo "media: " . number_format($media, 2, ".", "") . "\n";

if ($aprovado) {
    echo "situacao: aprovado\n";
} elseif ($recuperacao) {
    echo "situacao: recuperacao\n";
} else {
    echo "situacao: reprovado\n";
}