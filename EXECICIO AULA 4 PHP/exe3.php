<?php 

$vetor1 = array();
for ($i = 0; $i < 10; $i++) {
    $vetor1[] = rand(1, 100);
}

$vetor2 = array();
for ($i = 0; $i < 10; $i++) {
    $vetor2[] = rand(1, 100);
}


$vetorSoma = array();
for ($i = 0; $i < 10; $i++) {
    $vetorSoma[$i] = $vetor1[$i] + $vetor2[$i];
}

echo "Vetor 1: " . implode(", ", $vetor1) . "<br>";
echo "Vetor 2: " . implode(", ", $vetor2) . "<br>";
echo "Vetor de Soma: " . implode(", ", $vetorSoma) . "<br>";