<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associative Arrays</title>
</head>
<body>
    
<?php

    // Associative arrays have strings as keys and behave more like two-column tables.

    $names = array("first_name" => "Kemar", "last_name" => "Lawrence", "newLastName" => "Golding");
    print_r($names);

    echo "<br> <br>";

    echo $names["last_name"];

    echo "<br> <br>";

    echo $names["first_name"] . " " . $names["newLastName"];


?>

</body>
</html>