<?php
    $file = "example.txt";

    if($handle = fopen($file, 'w')){
        fwrite($handle, 'Hello World! Learning to program with PHP for the first time.');
        fclose($handle);
    } else {
        echo "The application was not able to write on the file.";
    }
?>