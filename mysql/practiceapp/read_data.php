<?php
    include "db.php";
    include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Practice Read Data</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Read Data</h1>
        <div class="col-sm-6">
            <pre class="bg-light">
                <?php readRows(); ?>
            </pre>
        </div>
    </div>
</body>
</html>