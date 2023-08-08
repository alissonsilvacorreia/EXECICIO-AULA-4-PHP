<?php 

$sal1 = 5000;
$sal2 = 2500;

$sal1 = 5000;
$sal2 = 2500;
$aumentoSal1 = $sal1 * 1.1;
$aumentoSal2 = $sal2 * 1.2;
$anos = 0;

while($sal2 <= $sal1){
    $sal1 *= 1.1;
    $sal2 *= 1.2;
    $anos = $anos + 1;
}

echo "Salario 1 com aumento de 10%: $aumentoSal1";
echo "<br>Salario 2 com aumento de 20%: $aumentoSal2"; 
echo "<br>Em $anos anos meu colega ganhara mais do que eu";