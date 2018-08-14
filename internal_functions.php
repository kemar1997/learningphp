<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Internal Functions</title>
</head>
<body>
    <?php 
        echo " <h3><code>strlen</code> Internal Function - Get string length.</h3> ";

        echo strlen("Hello World!");
        
        echo " <br> <br> ";

        echo " <h3><code>str_word_count</code> Internal Function - Return information about
         words used in a string.</h3> ";

        echo str_word_count("Hello World!");

        echo " <br> <br> ";

        echo " <h3><code>strrev</code> Internal Function - Reverse a string.</h3> ";

        echo strrev("Hello World!");

        echo " <br> <br> ";

        echo " <h3><code>strpos</code> Internal Function - Find the position of the first 
        occurence of a substring in a string.</h3> ";

        echo strpos("Hello World!", "!");

        echo " <br> <br> ";

        echo " <h3><code>str_replace</code> Internal Function - Replace all occurences of
        the search string with the replacement string.</h3> ";
        echo str_replace("World","Community","Hello World!");
    ?>
</body>
</html>