<?php 

function reajusteSalario($salFuncionario){
    if($salFuncionario > 0 && $salFuncionario < 3000){
        $reajuste = $salFuncionario * 1.5;
    }
    if($salFuncionario >= 3000){
        $reajuste = $salFuncionario * 1.3;
    }
    return $reajuste;
}

$salario = 3100;
$salReajustado = reajusteSalario($salario);

echo "Salario do funcionario: $salario";
echo "<br>Salario reajustado: $salReajustado";
