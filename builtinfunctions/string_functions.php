<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Built-in String Functions</title>
</head>
<body>

<?php

$string = "Hello World! How are you today? ";
echo strlen($string);

echo "<br>";

echo strtoupper($string);

echo "<br>";

echo strtolower($string);

echo "<br>";

echo str_shuffle($string);

echo "<br>";

echo str_repeat($string, 2);

echo "<br>";

print $string;

?>
    
</body>
</html>