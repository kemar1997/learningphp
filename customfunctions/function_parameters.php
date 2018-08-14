<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function Parameters</title>
</head>
<body>

<?php

function greeting($message){
    echo $message;
    echo "<br><br>";
}

function multiply($num1, $num2){
    echo $num1 * $num2;
    echo "<br>";
}

function divide($num1, $num2){
    echo $num1 / $num2;
    echo "<br>";
}

function addition($num1, $num2){
    echo $num1 + $num2;
    echo "<br>";
}

function subtraction($num1, $num2){
    echo $num1 - $num2;
    echo "<br>";
}

function init(){
    greeting("Hello World!");
    greeting("This is another greeting!");

    multiply(5, 5);
    divide(65, 5);
    addition(16, 45);
    subtraction(45, 20);
}

init();

?>
    
</body>
</html>