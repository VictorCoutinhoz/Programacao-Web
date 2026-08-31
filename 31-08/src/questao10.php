<?php

echo "1 - pendente\n";
echo "2 - preparacao\n";
echo "3 - enviado\n";
echo "4 - entregue\n";
echo "5 - cancelado\n";

$codigo = (int) readline("codigo do pedido: ");

switch ($codigo) {
    case 1:
        echo "pendente\n";
        break;
    case 2:
        echo "preparacao\n";
        break;
    case 3:
        echo "enviado\n";
        break;
    case 4:
        echo "entregue\n";
        break;
    case 5:
        echo "cancelado\n";
        break;
    default:
        echo "codigo invalido\n";
        break;
}
