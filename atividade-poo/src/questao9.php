<?php

class Carrinho {
    public $dono;
    public $itens = 0;

    function mostrar() {
        echo "carrinho de " . $this->dono . ": " . $this->itens . " item(ns)\n";
    }

    function adicionar($quantos) {
        $this->itens = $this->itens + $quantos;
        $this->mostrar();
    }
}

$carrinho = new Carrinho();

$carrinho->dono = "ana";

$carrinho->adicionar(3);
$carrinho->adicionar(2);