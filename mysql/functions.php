<?php include "db.php"; ?>
<?php
    function showAllData() {
        global $connection;
        
        $query = "SELECT * FROM users";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die('Query Failed'.mysqli_error());
        }

        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];

            echo "<option value='$id'>$id</option>";
        }
    }

    function createRows() {
        if(isset($_POST['submit'])) {
            global $connection;
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            # Prevents SQL Injection
            $username = mysqli_real_escape_string($connection, $username);
            $password = mysqli_real_escape_string($connection, $password);

            # Password Encryption
            $hashFormat = "$2y$10$";
            $salt = "loremipsumdolorsitaz22";
            $hashF_and_salt = $hashFormat . $salt;
            $password = crypt($password, $hashF_and_salt);

            $query = "INSERT INTO users(username,password) ";
            $query .= "VALUES ('$username', '$password')";

            $result = mysqli_query($connection, $query);

            if(!$result){
                die('Query Failed.'." ".mysqli_error($connection));
            } else {
                print "Record Created.";
            }
        }
    }

    function readRows() {
        global $connection;
        $query = "SELECT * FROM users";

        $result = mysqli_query($connection, $query);
    
        if(!$result){
            die('Query Failed'.mysqli_error());
        }

        
        while ($row = mysqli_fetch_assoc($result)) {
            print_r($row);
        }
    }
    
    function updateTable() {
        if(isset($_POST['submit'])){
            global $connection;
            $username = $_POST['username'];
            $password = $_POST['password'];
            $id = $_POST['id'];

            $query = "UPDATE users SET ";
            $query .= "username = '$username', ";
            $query .= "password = '$password' ";
            $query .= "WHERE id = $id ";

            $result = mysqli_query($connection, $query);

            if(!$result){
                die("Query Failed."." ".mysqli_error($connection));
            } else {
                print "Record Updated";
            }
        }
    }

    function deleteRows() {
        if(isset($_POST['submit'])){
            global $connection;
            $id = $_POST['id'];

            $query = "DELETE FROM users ";
            $query .= "WHERE id = $id ";

            $result = mysqli_query($connection, $query);

            if(!$result){
                die("Query Failed."." ".mysqli_error($connection));
            } else {
                print "<div class='container'>Row deleted successfully.</div>";
            }
        }
    }

?>