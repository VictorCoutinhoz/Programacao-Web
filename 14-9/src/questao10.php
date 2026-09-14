<?php

$nome = readline("nome: ");
$idade = (int) readline("idade: ");
$renda = (float) readline("renda mensal: ");
$tempoEmprego = (int) readline("tempo de emprego em meses: ");
$negativado = readline("esta negativado? (s/n): ");

$idadePermitida = ($idade >= 18 && $idade <= 65);

$rendaOuEstabilidade = (
    $renda >= 2000 || $tempoEmprego >= 24
);

$estaNegativado = ($negativado === "s");

$creditoAprovado = (
    $idadePermitida
    && $rendaOuEstabilidade
    && !$estaNegativado
);

echo "idade permitida: ";
echo $idadePermitida ? "atendida\n" : "nao atendida\n";

echo "renda ou estabilidade: ";
echo $rendaOuEstabilidade ? "atendida\n" : "nao atendida\n";

echo "nome limpo: ";
echo !$estaNegativado ? "atendida\n" : "nao atendida\n";

if ($creditoAprovado) {
    echo "credito aprovado para $nome\n";
} else {
    echo "credito negado para $nome\n";
}