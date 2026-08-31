<?php

$temp = (float) readline("temperature: ");

if ($temp < 15) {
    echo "frio\n";
} elseif ($temp <= 25) {
    echo "agradavel\n";
} elseif ($temp <= 35) {
    echo "quente\n";
} else {
    echo "muito quente\n";
}
