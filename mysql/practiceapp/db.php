<?php
    $ini = parse_ini_file('app.ini');
    $connection = mysqli_connect('localhost', $ini['db_user'], $ini['db_password'], $ini['db_name']);
    if(!$connection) {
        die("Database connection failed.");
    }
?>