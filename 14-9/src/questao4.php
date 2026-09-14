<?php

$usuarioCorreto = "ADMIN";
$senhaCorreta = "php2026";

$usuario = readline("usuario: ");
$senha = readline("senha: ");

$credenciaisValidas = (
    strcasecmp($usuario, $usuarioCorreto) === 0
    && $senha === $senhaCorreta
);

if (!$credenciaisValidas) {
    echo "usuario ou senha invalidos\n";
} else {
    echo "bem-vindo, admin\n";
}