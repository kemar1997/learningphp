<?php 
    include "db.php";
    include "functions.php";
    deleteRows();
?>

<?php include "includes/header.php"; ?>
<div class="container">
    <div class="col-sm-6">
        <h1 class="text-center">Delete</h1>
        <form action="login_delete.php" method="post">
            <div class="pt-4 form-group">
                <select name="id" id="">
                    <?php
                        // This function is located in "functions.php"
                        showAllData();
                    ?>
                </select>
            </div>

            <input class="btn btn-danger" type="submit" name="submit" value="DELETE">
        </form>
    </div>
</div>   
<?php include "includes/footer.php"; ?>