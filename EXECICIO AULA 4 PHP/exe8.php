<?php 

function CalculoIMC($peso, $altura){
    $imc = $peso / ($altura * $altura);

    if($imc < 18.5){
        $resultado = "deslutrido"; 
    }
    else if($imc >= 18.5 && $imc < 24.9){
        $resultado = "Normal";
    }
    else if($imc >= 29.4 && $imc <=30){
        $resultado = "Sobrepeso";
    }
    else{
        $resultado = "Obesidade";
    }
    return $resultado;
}

$resIMC = CalculoIMC(50.3, 1.70);
echo "IMC = $resIMC";