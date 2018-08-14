<?php
    /*
        Separating the connection information from its original file
        then using the include() function to create the ability to
        reuse this code whenever I need to.
    */

    // Parsing ini file
    $ini = parse_ini_file('app.ini');


    // Using ini file for db info
    $connection = mysqli_connect('localhost', $ini['db_user'], $ini['db_password'], $ini['db_name']);
            
    if(!$connection) {
        die("Database connection failed.");
    }

?>