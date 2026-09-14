<?php

$idade = (int) readline("idade: ");
$ingresso = readline("tem ingresso? (s/n): ");

$acessoLiberado = ($idade >= 18 && $ingresso === "s");

if ($acessoLiberado) {
    echo "entrada liberada\n";
} else {
    echo "acesso negado\n";
}