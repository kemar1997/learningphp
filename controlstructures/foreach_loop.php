<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foreach Loop</title>
</head>
<body>

<?php

    $numbers = array(54,566,686,648,234,568,213);

    // This loop only works with arrays
    foreach ($numbers as $number) {
        echo $number . "<br>";
    }

?>
    
</body>
</html>