<?php

class ContaBancaria {
    public $titular;
    public $saldo;
    public $banco;

    function depositar($valor) {
        $this->saldo = $this->saldo + $valor;
    }

    function sacar($valor) {
        $this->saldo = $this->saldo - $valor;
    }

    function mostrar() {
        echo "titular: " . $this->titular . "\n";
        echo "banco: " . $this->banco . "\n";
        echo "saldo: " . $this->saldo . "\n\n";
    }
}

$conta1 = new ContaBancaria();
$conta1->titular = "ana";
$conta1->saldo = 1000;
$conta1->banco = "banco A";

$conta2 = new ContaBancaria();
$conta2->titular = "bruno";
$conta2->saldo = 500;
$conta2->banco = "banco B";

$conta1->depositar(200);
$conta2->sacar(100);

$conta1->mostrar();
$conta2->mostrar();