<?php

$name = $_POST ['name'];
$users = $_POST['users'];
$book = $_POST ['book'];
$date = $_POST ['date'];


if ($users == "teacher"){
    echo "<p>Confirmado o aluguel do livro " . $book . " para o usuário " . $users . " e você terá que devolver no dia " . date(DATE_RFC822, strtotime("+10days")) . "</p>";
}else{
    echo "<p>Confirmado o aluguel do livro " . $book . " para o usuário " . $users . " e você terá que devolver no dia " . date(DATE_RFC822, strtotime("+3days")) . "</p>";
}



