<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Built-in Array Functions</title>
</head>
<body>

    <?php

        $list = [343, 54, 95, 66, 199, 799, 699, 999, 23, 71];

        print max($list);

        print "<br>";

        print min($list);

        print "<br>";

        sort($list);

        print_r($list);

    ?>
    
</body>
</html>