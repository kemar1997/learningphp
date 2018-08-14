<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scope</title>
</head>
<body>

<?php

$x = "outside"; // global scope

// To access a global variable from within a function, use the global keyword.
function convert(){
    global $x;
    $x = "inside"; // local scope
}

echo $x."<br>";

convert();

echo $x;

?>
    
</body>
</html>