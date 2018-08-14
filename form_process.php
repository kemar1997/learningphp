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
