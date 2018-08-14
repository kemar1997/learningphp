<?php
    /* Setting the Cookie */
    $name = "SomeName";
    $value = 100;
    $expiration = time() + (60*60*24*7);
    // pre defined function
    setcookie($name, $value, $expiration);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setting Cookies with PHP</title>
</head>
<body>
    <?php
        /* Reading Cookies */
        // $_COOKIE <-- Contains Information in an assoc array
        
        // Checking if cookie is set
        if (isset($_COOKIE[$name])) {
            $someOne = $_COOKIE[$name];

            echo $someOne;
        } else {
            $someOne = "";
        }
    ?>
</body>
</html>