<?php include "db.php"; ?>
<?php

    function readRows() {
        global $connection;
        $query = "SELECT * FROM employees";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query could not be completed."." ".mysqli_error());
        }

        while ($row = mysqli_fetch_assoc($result)) {
            print_r($row);
        }
    }

?>