<?php
$wage = $_POST['wage'];

if ($wage <= 300){
    $result = $wage * 1.5;
    echo "Seu salário reajustado é de " . $result;
}else{
    $result = $wage * 1.3;
    echo "Seu salário reajustado é de " . $result;
}
