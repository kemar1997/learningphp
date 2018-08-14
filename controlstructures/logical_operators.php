<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logical Operators</title>
</head>
<body>
    <?php
        // Logical Operators
        $x = 20;
        $y = 20;

        /* 
        The keyword "or" is equivalent to "||".
        The keyword "and" is equivalent to "&&"
        */

        if ($x == $y || 1 == 1) {
            echo "True";
        } else {
            echo "False";
        }

        echo "<div> <br> </div>";

        if ($x == $y && 2 == 1) {
            echo "True";
        } else {
            echo "False";
        }

        echo "<div> <br> </div>";

        /*
        The "xor" keyword is a logical operation that only occurs
        when you have two statements that differ (one has to be 
        false and the other has to be true).
        */

        $a = 15;
        $b = 30;

        if ($a != $b xor 62 == 90) {
            echo "True";
        } else {
            echo "False";
        }
    ?>
</body>
</html>