<?php
if (isset($_GET['number1']) && isset($_GET['number2']) && isset($_GET['operator'])){
    $number1= $_GET['number1'];
    $number2= $_GET['number2'];
    $operator= $_GET['operator'];
    switch ($operator) {
        case "sum":
            $resultat = $number1 + $number2;
            break;
        case "sous":
            $resultat = $number1 - $number2;
            break;
        case "div":
            $resultat = $number1 / $number2;
            break;
        case "mult":
            $resultat = $number1 * $number2;
            break;
    }
    var_dump($resultat);
}
require "./views/index.view.php";
