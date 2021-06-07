<?php

$stature = $_POST['stature'];
$gender = $_POST['gender'];

var_dump([
    $gender,
    $stature
]);
switch($gender){
    case "Male":
        $calc = (72.7 * $stature) - 58;
        $result = number_format($calc, 2,',','.');
        echo"O seu peso ideal é " . $result;
        break;
    case "Famele":
        $calc = (62.1 * $stature) - 44.7;
        $result = number_format($calc, 2,',','.');
        echo "O seu peso ideal é " . $result;
        break;

}


