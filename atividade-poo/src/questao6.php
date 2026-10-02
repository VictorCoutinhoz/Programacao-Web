<?php

class Produto {
    public $nome;
    public $preco;

    function aumentarPreco($valor) {
        $this->preco = $this->preco + $valor; // faltava usar $this->
    }

    function mostrar() {
        echo $this->nome . " custa " . $this->preco . "\n";
    }
}

$produto = new Produto();

$produto->nome = "caderno"; 
$produto->preco = 10; 
$produto->aumentarPreco(5); 
$produto->mostrar(); 