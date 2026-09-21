<?php

$resposta = (string) readline("é mamífero? (sim/nao): ");
if ($resposta === "sim") {$resposta = (string) readline("é quadrúpede? (sim/nao): ");
    if ($resposta === "sim") {$resposta = (string) readline("é carnívoro? (sim/nao): ");
        if ($resposta === "sim") {echo "leão\n";} 
        else {$resposta = (string) readline("é herbívoro? (sim/nao): ");
            if ($resposta === "sim") {echo "cavalo\n";} 
            else {echo "animal não identificado\n";}
        }
    } else {$resposta = (string) readline("é bípede? (sim/nao): ");
        if ($resposta === "sim") {$resposta = (string) readline("é onívoro? (sim/nao): ");
            if ($resposta === "sim") {echo "homem\n";} 
            else {$resposta = (string) readline("é frutívoro? (sim/nao): ");
                if ($resposta === "sim") {echo "macaco\n";}
                else {echo "animal não identificado\n";}
            }
        } else {$resposta = (string) readline("é voador? (sim/nao): ");
            if ($resposta === "sim") {echo "morcego\n";}
            else {$resposta = (string) readline("é aquático? (sim/nao): ");
                if ($resposta === "sim") {echo "baleia\n";}
                else {echo "animal não identificado\n";}
            }
        }
    }
} else {$resposta = (string) readline("é ave? (sim/nao): ");
    if ($resposta === "sim") {$resposta = (string) readline("é não voadora? (sim/nao): ");
        if ($resposta === "sim") {$resposta = (string) readline("é tropical? (sim/nao): ");
            if ($resposta === "sim") {echo "avestruz\n";
            } else {$resposta = (string) readline("é polar? (sim/nao): ");
                if ($resposta === "sim") {echo "pinguim\n";}
                else {echo "animal não identificado\n";}
            }
        } else {$resposta = (string) readline("é nadadora? (sim/nao): ");
            if ($resposta === "sim") {echo "pato\n";
            } else {$resposta = (string) readline("é de rapina? (sim/nao): ");
                if ($resposta === "sim") {echo "águia\n";
                } else {echo "animal não identificado\n";}
            }
        }
    } else {$resposta = (string) readline("é réptil? (sim/nao): ");
        if ($resposta === "sim") {$resposta = (string) readline("tem casco? (sim/nao): ");
            if ($resposta === "sim") {echo "tartaruga\n";
            } else {$resposta = (string) readline("é carnívoro? (sim/nao): ");
                if ($resposta === "sim") {echo "crocodilo\n";
                } else {$resposta = (string) readline("é sem patas? (sim/nao): ");
                    if ($resposta === "sim") {echo "cobra\n";
                    } else {echo "animal não identificado\n";}
                }
            }
        } else {echo "animal não identificado\n";}
    }
}