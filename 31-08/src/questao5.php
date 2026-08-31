<?php

echo "1 - suporte\n";
echo "2 - financeiro\n";
echo "3 - vendas\n";
echo "4 - cancelamento\n";

$opcao = (int) readline("opcao: ");

switch ($opcao) {
    case 1:
        echo "suporte\n";
        break;
    case 2:
        echo "financeiro\n";
        break;
    case 3:
        echo "vendas\n";
        break;
    case 4:
        echo "cancelamento\n";
        break;
    default:
        echo "opcao invalida\n";
        break;
}
