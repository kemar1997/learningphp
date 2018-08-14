<?php

    // Parsing ini file
    $ini = parse_ini_file('app.ini');

    if(isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        // Using ini file for db info
        $connection = mysqli_connect('localhost', $ini['db_user'], $ini['db_password'], $ini['db_name']);

        if($connection) {
            print "Connected to database.";
        } else {
            die("Database connection failed.");
        }

        // if($username && $password) {
        //     print $username."<br>".$password;
        // } else {
        //     print "Username field cannot be blank. Try again."
        // }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="col-sm-6">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>
    
</body>
</html>