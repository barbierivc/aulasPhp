<?php
$valor = $_POST['valor'];

if ($valor < 0){
    echo "O valor digitado é Negativo";
}else{
    echo "O valor digitado é Positivo";
}

