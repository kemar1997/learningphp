<?php

if(isset($_POST['submit'])){
    echo "Submit Button Clicked"."<br>";

    // Extracting data from form
    $username = $_POST['username'];
    $passwd = $_POST['passwd'];

    // Form Data Validation
    $names = ["Kemar", "Teacher", "Denesie", "Maria", "Rashad", "Tom"];
    $minimum = 5;
    $maximum = 12;

    if(strlen($username) < $minimum){
        echo "Username has to be longer than five characters.";
    } elseif (strlen($username) > $maximum) {
        echo "Username has to be less than twelve characters.";
    }

    if(!in_array($username, $names)){
        echo "Sorry you are not allowed to log in";
    } else {
        echo "Welcome, ".$username."!";
    }

    // echo "Welcome, ".$username."!<br>";
    // echo "Your password: ".$passwd;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checking for Form Submission</title>
</head>
<body>

<form action="checking_form_submission.php" method="post">
    <input type="text" name="username" placeholder="Enter Username"><br>
    <input type="password" name="passwd" placeholder="Enter Password"><br>
    <input type="submit" name="submit">
</form>
    
</body>
</html>