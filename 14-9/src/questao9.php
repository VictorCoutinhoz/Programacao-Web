<?php

$idade = (int) readline("idade do atleta: ");

if ($idade < 7) {
    echo "idade nao permitida\n";
} elseif ($idade >= 7 && $idade <= 11) {
    echo "categoria: infantil\n";
} elseif ($idade >= 12 && $idade <= 16) {
    echo "categoria: juvenil\n";
} elseif ($idade >= 17 && $idade <= 59) {
    echo "categoria: adulto\n";
} else {
    echo "categoria: master\n";
}