<?php

$n1 = (float) readline("primeiro numero: ");
$n2 = (float) readline("segundo numero: ");

echo "1 - soma\n";
echo "2 - subtracao\n";
echo "3 - multiplicacao\n";
echo "4 - divisao\n";

$opcao = (int) readline("escolha a operacao: ");

switch ($opcao) {
    case 1:
        $resultado = $n1 + $n2;
        echo "resultado: $resultado\n";
        break;
    case 2:
        $resultado = $n1 - $n2;
        echo "resultado: $resultado\n";
        break;
    case 3:
        $resultado = $n1 * $n2;
        echo "resultado: $resultado\n";
        break;
    case 4:
        if ($n2 == 0) {
            echo "erro: divisao por zero\n";
        } else {
            $resultado = $n1 / $n2;
            echo "resultado: $resultado\n";
        }
        break;
    default:
        echo "opcao invalida\n";
        break;
}
