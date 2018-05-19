<?php
function connectDb() {
    $conn = mysqli_connect("localhost","user","pass","db_name");
    return $conn;
}
?>
