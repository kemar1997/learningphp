<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables</title>
</head>
<body>
    <h1>Variables</h1>

    <form method="GET" action="">
        <input type="text" name="person">
        <button>SUBMIT</button>
    </form>

    <br>

    <?php
        // Variable Declaration
        $name = $_GET['person'];

        // Allows you to combine PHP code with strings
        echo $name." is a handsome fellow.";

        echo " <br> ";
        echo " <br> ";

        $age = 21;
        echo $age;

        echo " <br> ";
        echo " <br> ";

        $a = 3;
        $b = 6;
        $c = $a + $b;
        echo $a." + ".$b." is equal to ".$c."."
    ?>
</body>
</html>