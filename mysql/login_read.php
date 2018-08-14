<?php
    include "db.php";
    include "functions.php";
?>

<?php include "includes/header.php"; ?>
<h1 class="text-center">Read</h1>
<div class="container">
    <div class="col-sm-6">
        <pre class='bg-light'>
            <?php readRows(); ?>
        </pre> 
    </div>
</div>
<?php include "includes/footer.php"; ?>