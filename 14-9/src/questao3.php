<?php

$valorPedido = (float) readline("valor do pedido: ");
$cartao = readline("tem cartao? (s/n): ");
$pix = readline("tem pix? (s/n): ");

$pagamentoAceito = ($cartao === "s" || $pix === "s");

if ($pagamentoAceito) {
    echo "valor: R$ $valorPedido\n";
    echo "pedido aprovado\n";
} else {
    echo "pedido recusado, sem forma de pagamento\n";
}