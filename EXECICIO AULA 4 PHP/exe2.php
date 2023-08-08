<?php 
$vetor = array(1,10,3,2,6);

$menorElemento = $vetor[0];
$posicaoMenorElemento = 0;

for ($i = 1; $i <= 5; $i++) {
    if ($vetor[$i] < $menorElemento) {
        $menorElemento = $vetor[$i];
        $posicaoMenorElemento = $i;
    }
}

echo "Menor elemento: $menorElemento";
echo "<br>";
echo "Posicao: $posicaoMenorElemento";