<?php

$nota1 = (float) readline("primeira nota: ");
$nota2 = (float) readline("segunda nota: ");

$media = ($nota1 + $nota2) / 2;

echo "media: $media\n";

if ($media >= 7) {
    echo "aprovado\n";
} elseif ($media >= 5) {
    echo "recuperacao\n";
} else {
    echo "reprovado\n";
}
