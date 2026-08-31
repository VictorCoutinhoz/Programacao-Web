<?php

$idade = (int) readline("digite a idade: ");

if ($idade < 0) {
    echo "idade invalida!\n";
} elseif ($idade <= 12) {
    echo "crianca\n";
} elseif ($idade <= 17) {
    echo "adolescente\n";
} elseif ($idade <= 59) {
    echo "adulto\n";
} else {
    echo "idoso\n";
}
