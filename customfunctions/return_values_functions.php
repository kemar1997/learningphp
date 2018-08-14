<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Return Values From Functions</title>
</head>
<body>

<?php

function addNumbers($num1, $num2){
    $sum = $num1 + $num2;

    return $sum;
}

$result = addNumbers(15, 18);

// Reusing the addNumbers() function to add to the preexisting result.
$result = addNumbers(50, $result);

echo $result;

?>
    
</body>
</html>