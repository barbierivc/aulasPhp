<?php

$valueA = $_POST['valueA'];
$valueB = $_POST['valueB'];
$valueC = $_POST['valueC'];
$valueD = $_POST['valueD'];

$valueAC = $valueA + $valueC;
$valueBD = $valueB * $valueD;

if ($valueAC > $valueBD){
    echo "O valor das Variaveis A " . $valueA . " e C" . $valueC . " é maior que variável B e D ";
}elseif ($valueAC == $valueBD){
    echo "O valor das variaveis A " . $valueA . " e C " . $valueC . " é igual as variáveis B " . $valueB . " e D " . $valueD;
}else{
    echo "O valor das variaveis A " . $valueA . " e C " . $valueC . " é menor que as variáveis B " . $valueB . " e D " . $valueD;

}

var_dump([
    $valueA,
    $valueB,
    $valueC,
    $valueD
]);