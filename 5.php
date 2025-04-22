<?php
$nota1 = 8;
$nota2 = 6;
$nota3 = 7;

$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media >= 7) {
    echo "Aprovado";
} elseif ($media >= 5) {
    echo "Recuperação";
} else {
    echo "Reprovado";
}
?>