<?php
function ehPrimo($numero) {
    if ($numero <= 1) return false;
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) return false;
    }
    return true;
}

// Testes
echo "7 é primo? " . (ehPrimo(7) ? "Sim" : "Não") . "\n";
echo "10 é primo? " . (ehPrimo(10) ? "Sim" : "Não") . "\n";
echo "13 é primo? " . (ehPrimo(13) ? "Sim" : "Não") . "\n";
?>
