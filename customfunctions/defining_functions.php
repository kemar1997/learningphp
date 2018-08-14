<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Defining Functions</title>
</head>
<body>

<?php

// Programmer defined function
function say_Something() {
    echo "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum dignissimos enim, perferendis, deleniti dolorem recusandae maiores pariatur nisi et, officiis in explicabo sunt nesciunt numquam dolore vel excepturi incidunt quos?</p>
    <p>Earum voluptates rerum consequatur, optio molestias provident quod itaque distinctio quibusdam explicabo hic et nesciunt laudantium ut adipisci perspiciatis veniam tenetur vero, fugiat quos! Voluptatum quam ab ipsum quas quaerat!</p>
    <p>Aliquid nisi quisquam hic odit labore. Tenetur praesentium voluptatum autem placeat voluptatibus totam, eaque ad nisi quam magni animi fuga. Corporis optio perspiciatis totam quibusdam, voluptatibus doloremque vel quae vitae!</p>
    <p>Consequatur pariatur voluptatem repellendus ea dolor aspernatur ipsam corporis, ex numquam nobis similique eaque! Sit quam facere facilis numquam, odio autem quidem consequatur. Tempore error nostrum at accusantium quisquam ipsum!</p>";
}

function calculate() {
    echo 15 * 3;
}

// Function Initializer
function init() {
    say_Something();
    calculate();
}

init();

?>
    
</body>
</html>