<?php

$usuario = readline("usuario: ");
$senha = readline("senha: ");

if ($usuario == "admin" && $senha == "1234") {
    echo "login realizado\n";
} else {
    echo "usuario ou senha incorretos\n";
}
