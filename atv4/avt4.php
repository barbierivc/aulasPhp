<?php
$valueA = $_POST['valueA'];
$valueB = $_POST['valueB'];

if ($valueA < $valueB) {
    echo $valueA . ", " . $valueB;
}elseif ($valueA > $valueB) {
    echo $valueB . ", " . $valueA;
}else {
    echo $valueA . ", " . $valueB;
}
