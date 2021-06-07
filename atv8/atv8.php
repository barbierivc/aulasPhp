<?php
$firstNote = $_POST ['firstNote'];
$secondNote = $_POST ['secondNote'];
$thirdNote = $_POST ['thirdNote'];
$fourthNote = $_POST ['fourthNote'];

$result = ($firstNote+$secondNote+$thirdNote+$fourthNote)/4;

if ($result >= 7){
    echo "Aprovado.: " . $result;
}else{
    echo "Reprovado.: " . $result;
}