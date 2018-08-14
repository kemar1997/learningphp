<?php
    echo $_POST['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using the POST super global</title>
</head>
<body>
    <form action="the_post.php" method="POST">
        <input type="text" name="name">
        <input type="submit">
    </form>
</body>
</html>