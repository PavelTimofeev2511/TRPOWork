<?php

include 'core/EquationInterface.php';
include 'core/LogInterface.php';
include 'core/LogAbstract.php';

include 'timofeev/TimofeevExeption.php';
include 'timofeev/linear_equation.php';
include 'timofeev/quadratic_equation.php';
include 'timofeev/Mylog.php';

$answer = new timofeev\QuadraticEquation();


try {
    $a = readline("a= \n\r");
    $b = readline("b= \n\r");
    $c = readline("c= \n\r");
    $result = $answer->solve($a, $b, $c);
    $str = implode("", $result);
    $mes = "Корни уравнения.";
    timofeev\Mylog::log("\n\r". $mes . "\n\r". $str);

} catch (Exception $err) {
    timofeev\Mylog::log($err);
}

timofeev\Mylog::write();